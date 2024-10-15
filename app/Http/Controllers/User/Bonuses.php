<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bonus;
use App\Models\GeneralSetting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Bonuses extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'bonuses'=>Bonus::where('user',$user->id)->paginate(15),
            'pageName'=>'Bonus',
            'siteName'=>$web->name,
        ];

        return view('user.bonuses',$dataView);
    }
}
