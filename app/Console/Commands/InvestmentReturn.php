<?php

namespace App\Console\Commands;

use App\Jobs\SendInvestmentNotification;
use App\Models\Investment;
use App\Models\Package;
use App\Models\ReturnType;
use App\Models\User;
use App\Notifications\InvestmentMail;
use Illuminate\Console\Command;

class InvestmentReturn extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investment:return';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Processes investments and adds returns depending on the return type.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $investments = Investment::where('status',4)->where('nextReturn','<=',time())->get();
        if ($investments->count()>0){
            foreach ($investments as $investment) {
                $user = User::where('id',$investment->user)->first();

                $package = Package::where('id',$investment->package)->first();


                $currentReturn = $investment->currentReturn;
                $numberOfReturn = $investment->numberOfReturns;

                $currentProfit = $investment->currentProfit;
                $profitToAdd = $investment->profitPerReturn;

                $returnTypes = ReturnType::where('id',$investment->returnType)->first();
                $returnType = $returnTypes->duration;
                //if the expected number of addition is less than the total number of return; we will credit
                if ($currentReturn < $numberOfReturn){

                    $dataReturns = [
                        'amount'=>$profitToAdd,
                        'investment'=>$investment->id
                    ];

                    $instantCurrentReturn = $currentReturn+1;
                    $newProfit = $currentProfit+$profitToAdd;
                    $dataInvestment = [
                        'currentProfit'=> $newProfit,
                        'currentReturn'=>$instantCurrentReturn,
                        'nextReturn'=>strtotime($returnType,time()),
                    ];

                    if ($instantCurrentReturn == $numberOfReturn){
                        //since by here it would have returned completely, we will end the cycle

                        $dataInvestment['status']=1;
                        $dataInvestment['nextReturn']=time();

                        $update = Investment::where('id',$investment->id)->update($dataInvestment);
                        if ($update){
                            if ($package->withdrawEnd!=1){
                                $user->profit = $user->profit+$profitToAdd+$investment->amount;
                            }else{
                                $user->profit = $user->profit+$newProfit+$investment->amount;
                            }

                            $user->save();

                            \App\Models\InvestmentReturn::create($dataReturns);

                            //send a mail to investor
                            $userMessage = "
                                Your Investment with reference Id is <b>".$investment->reference."</b> has completed
                                 and the earned returns added to your profit account.
                            ";
                            //send mail to user
                            //SendInvestmentNotification::dispatch()
                            $user->notify(new InvestmentMail($user,$userMessage,'Investment Completion'));
                            $admin = User::where('is_admin',1)->first();
                            //send mail to Admin
                            if (!empty($admin)){
                                $adminMessage = "
                                    An investment started by the investor <b>".$user->name."</b> with reference
                                    <b>".$investment->reference."</b> has completed and returns credited to profit balance.
                                ";
                                //SendInvestmentNotification::dispatch();
                                $admin->notify(new InvestmentMail($admin,$adminMessage,'Investment completion'));
                            }
                        }

                    }else{

                        $update = Investment::where('id',$investment->id)->update($dataInvestment);
                        if ($update){
                            \App\Models\InvestmentReturn::create($dataReturns);
                            if ($package->withdrawEnd !=1){
                                $dataUser = [
                                    'profit'=>$user->profit+$profitToAdd
                                ];

                                User::where('id',$user->id)->update($dataUser);
                            }
                            //send a mail to investor
                            $userMessage = "
                                Your Investment with reference Id is <b>".$investment->reference."</b> has returned
                                <b>$".$profitToAdd."</b> to your account. <br> You can find this in the specific
                                investment Current Profit column. <br>
                                <p>Please Note: <b>All returns will be credited to your profit balance at the end of
                                the cycle.</b></p>
                            ";
                            //send mail to user
                            //SendInvestmentNotification::dispatch();
                            $user->notify(new InvestmentMail($user,$userMessage,'Investment Return'));
                        }
                    }
                }
            }
        }
    }
}
