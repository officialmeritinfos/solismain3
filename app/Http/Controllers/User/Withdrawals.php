<?php

namespace App\Http\Controllers\User;

use App\Defaults\Regular;
use App\Http\Controllers\Controller;
use App\Jobs\SendInvestmentNotification;
use App\Models\Coin;
use App\Models\GeneralSetting;
use App\Models\Package;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdrawal;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Withdrawals extends Controller
{
    use Regular;
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'withdrawals'=>Withdrawal::where('user',$user->id)->paginate(15),
            'pageName'=>'Withdrawal Lists',
            'siteName'=>$web->name
        ];

        return view('user.withdrawals',$dataView);
    }
    public function newWithdrawal()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'pageName'=>'New Withdrawal',
            'siteName'=>$web->name,
            'coins'=>Coin::where('status',1)->get(),
            'wallets'=>Wallet::where('user',$user->id)->where('status',1)->get()
        ];

        return view('user.new_withdrawal',$dataView);
    }

    public function processWithdrawal(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'amount'=>['required','numeric'],
            'wallet'=>['required','string']
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        if ($user->loan >0){
            return back()->with('error','You cannot make any withdrawal until you have cleared your loan of
            $'.number_format($user->loan,2).'. Please contact support for more details regarding this.');
        }

        $wallet = Wallet::where(['user'=>$user->id,'id'=>$input['wallet']])->first();



        $balance = $user->profit;
        $newBalance = [
            'profit'=>$balance- $input['amount']
        ];

        if ($balance < $input['amount']){
            return back()->with('error','Insufficient balance');
        }
        $ref = $this->generateId('withdrawals','reference',10);

        $data=[
            'user'=>$user->id,'reference'=>$ref,'amount'=>$input['amount'],'asset'=>$wallet->coin,
            'details'=>$wallet->address
        ];

        $withdrawal = Withdrawal::create($data);
        if (!empty($withdrawal)){
            User::where('id',$user->id)->update($newBalance);

            //check if admin exists
            $admin = User::where('is_admin',1)->first();
            $userMessage = "
                Your new withdrawal request of $<b>".$input['amount']." </b>
                has been received and will be processed soonest. Your Withdrawal reference Id is <b>".$ref."</b>
            ";
            //send mail to user
            //SendInvestmentNotification::dispatch($user,$userMessage,'New Withdrawal');
            $user->notify(new InvestmentMail($user,$userMessage,'New Withdrawal'));
            //send mail to Admin
            if (!empty($admin)){
                $adminMessage = "
                    A new withdrawal request of $<b>".$input['amount']."</b>
                    has been submitted by the investor <b>".$user->name."</b> with reference <b>".$ref."</b>
                ";
                //SendInvestmentNotification::dispatch($admin,$adminMessage,'New Withdrawal Request');
                $admin->notify(new InvestmentMail($admin,$adminMessage,'New Withdrawal Request'));
            }
            return redirect()->route('withdrawal.index')
                ->with('success','Withdrawal processing.');
        }
        return back()->with('error','Something went wrong');
    }
    public function cancel($id)
    {

    }
}
