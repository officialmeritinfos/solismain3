<?php

namespace App\Console\Commands;

use App\Defaults\Wallet;
use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\User;
use App\Notifications\DepositMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CheckDeposit extends Command
{
    use Wallet;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:deposit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks deposit to ensure know if it has been paid for';

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
        $web = GeneralSetting::where('id',1)->first();
        $deposits = Deposit::where('status',2)->where('paymentMethod',1)->get();
        if ($deposits->count() >0){
            foreach ($deposits as $deposit){
                $paymentReference = $deposit->paymentRef;
                //fetch the invoice details
                $result = $this->checkInvoice($paymentReference);

                if ($result->ok()){
                    $response = $result->json();
                    $status = $response['data']['status'];
                    if (strtolower($status) =='paid'){
                        $user = User::where('id',$deposit->user)->first();

                        $data=[
                            'balance'=>$deposit->amount+$user->balance
                        ];
                        $dataDeposit =[
                            'status'=>1,
                            'timeOfPayment'=>time()
                        ];

                        $updateDeposit = Deposit::where('id',$deposit->id)->update($dataDeposit);
                        if ($updateDeposit){
                            User::where('id',$user->id)->update($data);
                            //send mail to investor
                            $userMessage = "
                                Your deposit of $<b>".$deposit->amount." worth of ".$deposit->asset."</b>
                                has been received and your payment credited to your account. You can proceed to investing
                            ";
                            $user->notify(new DepositMail($user,$userMessage,'Deposit Received'));

                            //send mail to Admin
                            //check if admin exists
                            $admin = User::where('is_admin',1)->first();
                            if (!empty($admin)){
                                $adminMessage = "
                                    The deposit with reference : <b>".$deposit->reference." placed by the investor
                                    <b>".$user->name."</b> has been completed.
                                ";
                                $admin->notify(new DepositMail($admin,$adminMessage,'Deposit payment completed'));
                            }
                        }
                        //check if user has referral
                        if ($user->referral !=0 && !empty($user->referral)){
                            $refBonus = $deposit->amount * ($web->refBonus/100);

                            $referral = User::where('id',$user->referral)->first();
                            $dataReferral = [
                                'refBal'=>$referral->refBal +$refBonus
                            ];
                            $creditReferral = User::where('id',$referral->id)->update($dataReferral);
                            if ($creditReferral){
                                //send mail to referral
                                $userMessage = "
                                Your referral balance on ".$web->name." has been credited with $<b>".$refBonus." from your
                                downliner.
                            ";
                                $referral->notify(new DepositMail($referral,$userMessage,'Referral Bonus Received'));
                            }
                        }
                    }elseif (strtolower($status) == 'partial'){
                        $dataDeposit =[
                            'status'=>4
                        ];
                        $updateDeposit = Deposit::where('id',$deposit->id)->update($dataDeposit);
                        if ($updateDeposit){
                            //send mail to investor
                            $userMessage = "
                                A partial payment was received for your deposit of $<b>".$deposit->amount." worth
                                of ".$deposit->asset."</b>. Please contact support for more details and help in
                                completing your payment.
                            ";
                            $user->notify(new DepositMail($user,$userMessage,'Partial Deposit Received'));

                            //send mail to Admin
                            //check if admin exists
                            $admin = User::where('is_admin',1)->first();
                            if (!empty($admin)){
                                $adminMessage = "
                                    The deposit with reference : <b>".$deposit->reference." placed by the investor
                                    <b>".$user->name."</b> has received a partial payment. Please contact the investor.
                                ";
                                $admin->notify(new DepositMail($admin,$adminMessage,'Partial Deposit payment'));
                            }
                        }
                    }
                }
                else{
                    Log::info($result->json());
                }
            }
        }
    }
}
