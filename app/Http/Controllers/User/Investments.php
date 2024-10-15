<?php

namespace App\Http\Controllers\User;

use App\Defaults\Regular;
use App\Http\Controllers\Controller;
use App\Jobs\SendDepositNotification;
use App\Jobs\SendInvestmentNotification;
use App\Models\Coin;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Package;
use App\Models\ReturnType;
use App\Models\Service;
use App\Models\User;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Investments extends Controller
{
    use Regular;
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'investments'=>Investment::where('user',$user->id)->paginate(15),
            'pageName'=>'Investment Lists',
            'siteName'=>$web->name,
            'services'=>Service::get()
        ];

        return view('user.investments',$dataView);
    }

    public function newInvestment()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'pageName'=>'',
            'siteName'=>$web->name,
            'packages'=>Package::where('status',1)->get(),
            'coins'=>Coin::where('status',1)->get(),
            'services'=>Service::get()
        ];

        return view('user.new_investments',$dataView);
    }

    public function processInvestment(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'amount'=>['required','numeric'],
            'account'=>['required','numeric'],
            'package'=>['required','numeric'],
            'asset'=>['required','string'],
            'service'=>['nullable','string'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }

        $input = $validator->validated();

        //check if the asset is supported
        $coinExists = Coin::where('asset',strtoupper($input['asset']))->first();
        if (empty($coinExists)){
            return back()->with('error','Asset is not supported');
        }
        //generate deposit reference
        $reference = $this->generateId('deposits','reference',10);
        //check if the package exists

        $packageExists = Package::where('id',$input['package'])->first();


        if (empty($packageExists)){
            return back()->with('error','Selected Package is invalid');
        }

        //check if amount matches
        if ($packageExists->isUnlimited !=1){
            if ($packageExists->maxAmount < $input['amount']){
                return back()->with('error','Investment amount cannot be greater than maximum amount');
            }
        }
        if ($packageExists->minAmount > $input['amount']){
            return back()->with('error','Investment amount cannot be less than minimum amount');
        }

        $packageHasLoan = $packageExists->canLoan;

        //check if the user has the amount in balance
        switch ($input['account']){
            case 1:
                $balance = $user->balance;
                $source = 'New Deposit';
                $newBalance = [
                    'balance'=>$balance
                ];
                $status=2;
                break;
            default:
                $balance = $user->profit;
                $source = 'profit';
                $newBalance = [
                    'profit'=>$balance- $input['amount']
                ];
                $status=4;
                break;
        }

        if ($input['account']!=1 && $balance < $input['amount'] && $packageHasLoan !=1){
            return back()->with('error','Insufficient fund in '.$source.' account.');
        }


        //get the return type attached to investment package
        $returnType = ReturnType::where('id',$packageExists->returnType)->first();
        //do calculations for the investment
        $roi = $packageExists->roi;
        $profitPerReturn = $input['amount']*($roi/100);
        $nextReturn = strtotime($returnType->duration,time());
        $ref =$this->generateId('investments','reference',15);
        //check if amount is more than minimum deposit
        if ($web->minDeposit > $input['amount'] && $input['account']==1){
            return back()->with('error','Amount to Deposit is less than minimum Deposit of $'.$web->minDeposit);
        }
        $dataInvestment = [
            'user'=>$user->id,'amount'=>$input['amount'],'roi'=>$roi,'reference'=>$ref,
            'source'=>strtolower($source),'profitPerReturn'=>$profitPerReturn,'currentProfit'=>0,
            'nextReturn'=>$nextReturn,'currentReturn'=>0,'returnType'=>$returnType->id,
            'numberOfReturns'=>$packageExists->numberOfReturns,'status'=>$status,
            'duration'=>$packageExists->Duration,
            'package'=>$packageExists->id,
            'wallet'=>$coinExists->address,'asset'=>$coinExists->asset,
            'expectedReturns'=>$profitPerReturn*$packageExists->numberOfReturns
        ];

        $investment = Investment::create($dataInvestment);
        if (!empty($investment)){
            User::where('id',$user->id)->update($newBalance);
            //send notification
            //check if admin exists
            $admin = User::where('is_admin',1)->first();
            if ($input['account']==1){
                $userMessage = "
                    Your new deposit request of $<b>".$input['amount']." worth of ".$input['asset']."</b>
                    has been received and awaiting payment. To complete your deposit, send your payment to the Address
                    below: <br>
                    <b>Wallet Address:</b> ".$coinExists->address.".
                ";
                $userTitle = "Pending Deposit Request";

                $adminMessage = "
                    A new deposit request of $<b>".$input['amount']." worth of ".$input['asset']."</b>
                    has been placed by the investor <b>".$user->name."</b> with reference <b>".$reference."</b>
                ";
                $adminTitle = "New Pending Deposit";
            }else{
                $userMessage = "<p>
                    Your new investment of $<b>".$input['amount']." </b>
                    has been received, and successfully initiated. </p>
                    <p>Thanks for investing with us!</p>
                    <br>
                    Your Investment reference Id is <b>".$ref."</b>
                ";
                $userTitle = "Investment Initiation";
                $adminMessage = "
                    A new investment of $<b>".$input['amount']."</b>
                    has been started by the investor <b>".$user->name."</b> with reference <b>".$ref."</b>
                ";
                $adminTitle = "New Investment Initiation";
            }

            //send mail to user
            //SendInvestmentNotification::dispatch($user,$userMessage,'Investment Initiation');
            $user->notify(new InvestmentMail($user,$userMessage,$userTitle));
            //send mail to Admin
            if (!empty($admin)){
                //SendInvestmentNotification::dispatch($admin,$adminMessage,'New Investment Initiation');
                $admin->notify(new InvestmentMail($admin,$adminMessage,$adminTitle));
            }
            return redirect()->route('invest_detail',['id'=>$investment->id])
                ->with('success','Investment initiated successfully.');
        }
        return back()->with('error','Something went wrong');
    }

    public function investmentDetails($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::where('user',$user->id)->findOrFail($id);
        $dataView = [
            'user'=>$user,
            'web'=>$web,
            'pageName'=>'Investment Detail',
            'siteName'=>$web->name,
            'investment'=>$investment,
        ];
        return view('user.investment_detail',$dataView);
    }

    public function cancel($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::find(1);

        $investment = Investment::where('user',$user->id)->where('id',$id)->first();

        if (empty($investment)){
            return back()->with('error','Investment not found');
        }
        if ($investment->status ==1){
            return back()->with('error','Investment already completed.');
        }

        if ($investment->status ==3){
            return back()->with('error','Investment already cancelled.');
        }

        $data=['status'=>3];

        switch ($investment->source){
            case 'new deposit':
                $balance = $user->balance;
                $newBalance = ['balance'=>$balance];
                break;
            default:
                $balance = $user->profit+$investment->amount;
                $newBalance = ['profit'=>$balance];
                break;
        }
        $update=Investment::where('id',$investment->id)->update($data);

        if ($update){

            User::where('id',$user->id)->update($newBalance);

            return back()->with('success','Investment cancelled');
        }

        return back()->with('error','Something went wrong');
    }

    public function getServicePackages($id)
    {
        $service = Service::where('id',$id)->first();
        $packages = Package::where('service',$id)->get();
        if ($packages->count()<1){
            return response()->json([
                'error'=>true,
                'message'=>'No package found'
            ]);
        }else{
            $dataCo = [];
            foreach ($packages as $package) {
                $data=[
                    'id'=>$package->id,
                    'name'=>$package->name,
                    'minAmount'=>$package->minAmount,
                    'maxAmount'=>$package->maxAmount
                ];

                $dataCo[]=$data;
            }
            return response()->json([
                'error'=>false,
                'data'=>$dataCo,
                'service'=>$service->title
            ]);
        }
    }
    public function getPackageDetails($id)
    {
        $package = Package::where('id',$id)->first();
        if (empty($package)){
            return response()->json([
                'error'=>true,
                'message'=>'Invalid Package'
            ]);
        }else{
            $data=[
                'id'=>$package->id,
                'name'=>$package->name,
                'minAmount'=>number_format($package->minAmount,2),
                'maxAmount'=>($package->isUnlimited==1)?'unlimited':number_format($package->maxAmount,2),
                'daily'=>number_format($package->roi,2),
                'monthly'=>number_format($package->roi*30,2),
                'weekly'=>number_format($package->roi*7,2),
                'ref'=>number_format($package->referral,2),
                'duration'=>$package->Duration
            ];
            return response()->json([
                'error'=>false,
                'data'=>$data
            ]);
        }
    }
}
