<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Dashboard',
            'user'     =>  $user,
            'web'=>$web,
            'potentialProfit'=>Investment::where(['user'=>$user->id,'status'=>4])->sum('expectedReturns'),
            'liveProfit'=>Investment::where(['user'=>$user->id,'status'=>4])->sum('currentProfit'),
            'investments'=>Investment::where(['user'=>$user->id])->limit(5)->get()
        ];

        return view('user.dashboard',$dataView);
    }
}
