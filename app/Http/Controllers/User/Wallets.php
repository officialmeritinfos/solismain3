<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\Models\GeneralSetting;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Wallets extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'pageName'=>'Wallets',
            'siteName'=>$web->name,
            'wallets'=>Wallet::where(['user'=>$user->id])->get(),
            'coins'=>Coin::where('status',1)->get(),
        ];

        return view('user.wallets',$dataView);
    }

    public function addWallet(Request  $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->input(),[
            'coin'=>['required','string'],
            'address'=>['required','string']
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $coin = Coin::where('asset',$input['coin'])->first();

        $wallet = Wallet::create([
            'user'=>$user->id,
            'asset'=>$coin->asset,
            'coin'=>$coin->name,
            'address'=>$input['address']
        ]);
        if (!empty($wallet)){
            return back()->with('success','Wallet added.');
        }
        return back()->with('error','Something went wrong');
    }

    public function deleteWallet(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric']
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $wallet = Wallet::where(['id'=>$input['id'],'user'=>$user->id])->first();
        if (empty($wallet)){
            return back()->with('error','Something went wrong');
        }
        $wallet->delete();
        return back()->with('success','Wallet deleted.');
    }
}
