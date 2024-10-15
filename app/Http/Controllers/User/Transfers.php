<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Service;
use App\Models\Transfer;
use App\Models\User;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Transfers extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'pageName'=>'Transfer',
            'siteName'=>$web->name,
        ];

        return view('user.new_transfer',$dataView);
    }
    public function transfers()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'transfers'=>Transfer::where('user',$user->id)->paginate(15),
            'pageName'=>'Transfer',
            'siteName'=>$web->name,
        ];

        return view('user.transfers',$dataView);
    }

    public function addNew(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'amount'=>['required','numeric'],
            'receiver'=>['required','string']
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }

        $input = $validator->validated();

        if ($user->canSend!=1){
            return back()->with('error','Your account is not approved for transfer. Please contact support.');
        }

        $receiver = User::where('username',$input['receiver'])->first();

        if (empty($receiver)){
            return back()->with('error','Invalid receiver inputted');
        }

        if ($user->profit<$input['amount']){
            return back()->with('error','Insufficient balance');
        }

        $dataUser = [
            'profit'=>$user->profit - $input['amount']
        ];
        $dataReceiver = [
            'profit'=>$receiver->profit+$input['amount']
        ];

        $transfer = Transfer::create([
            'user'=>$user->id,
            'receiver'=>$input['receiver'],
            'amount'=>$input['amount'],
            'status'=>1
        ]);
        if (!empty($transfer)){

            User::where('id',$user->id)->update($dataUser);
            User::where('id',$receiver->id)->update($dataReceiver);

            $messageToSender = "Your transfer of $".number_format($input['amount'],2)." to ".$input['receiver']."
                was successful and amount debited from your account.
            ";
            $messageToReceiver = "You just received $".number_format($input['amount'],2)." from ".$user->username.".";

            $messageToAdmin = "A transfer of $".number_format($input['amount'],2)." has been made by ".$user->name." to
            ".$receiver->name. " which has been credited to them.";

            //send mail
            $user->notify(new InvestmentMail($user,$messageToSender,'Transfer Notification'));
            $receiver->notify(new InvestmentMail($receiver,$messageToReceiver,'Credit Notification'));
            $admin = User::where('is_admin',1)->first();
            if (!empty($admin)){
                $admin->notify(new InvestmentMail($admin,$messageToAdmin,'Transfer Notice on '.env('APP_NAME')));
            }
            back()->with('success','Transfer successful');
        }else{
            return back()->with('error','Something went wrong');
        }
    }
}
