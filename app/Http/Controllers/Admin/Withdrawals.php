<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendInvestmentNotification;
use App\Models\GeneralSetting;
use App\Models\User;
use App\Models\Withdrawal;
use App\Notifications\DepositMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Withdrawals extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'withdrawals'=>Withdrawal::get(),
            'pageName'=>'Withdrawal Lists',
            'siteName'=>$web->name
        ];

        return view('admin.withdrawals',$dataView);
    }

    public function cancel($id)
    {
        $withdrawal = Withdrawal::where('id',$id)->first();
        if (empty($withdrawal)){
            return back()->with('error','Not found');
        }

        $investor = User::where('id',$withdrawal->user)->first();

        $dataUser = [
            'profit'=>$investor->profit+$withdrawal->amount
        ];

        $dataWithdrawal = [
            'status'=>3
        ];

        $update = Withdrawal::where('id',$id)->update($dataWithdrawal);
        if ($update){

            User::where('id',$investor->id)->update($dataUser);

            $userMessage = "
                Your withdrawal request with reference Id <b>".$withdrawal->reference." </b>
                has been rejected and account refunded of the requested amount.
            ";
            //send mail to user
            //SendInvestmentNotification::dispatch($investor,$userMessage,'Withdrawal Rejected');
            $investor->notify(new DepositMail($investor,$userMessage,'Withdrawal Rejected'));

        }
        return back()->with('success','Withdrawal Cancelled');
    }

    public function approve($id)
    {
        $withdrawal = Withdrawal::where('id',$id)->first();
        if (empty($withdrawal)){
            return back()->with('error','Not found');
        }

        $investor = User::where('id',$withdrawal->user)->first();

        $dataUser = [
            'withdrawals'=>$investor->withdrawal+$withdrawal->amount
        ];

        $dataWithdrawal = [
            'status'=>1
        ];

        $update = Withdrawal::where('id',$id)->update($dataWithdrawal);
        if ($update){

            User::where('id',$investor->id)->update($dataUser);

            $userMessage = "
                $<b>".$withdrawal->amount." </b> has been successfully sent to your ".$withdrawal->asset."  -
                ".$withdrawal->details.".
                Transaction Batch is ".sha1(rand(100000000,900000000))."
            ";
            $investor->notify(new DepositMail($investor,$userMessage,'Withdrawal Processed'));
            //send mail to user
            //SendInvestmentNotification::dispatch($investor,$userMessage,'Withdrawal Approval');

        }
        return back()->with('success','Withdrawal Approved');
    }
}
