<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Notifications extends Controller
{
    public function landingPage()
    {

    }

    public function markRead($id)
    {
        $user = Auth::user();
        $notification = Notification::where('id',$id)->first();

        $notification->status=1;
        $notification->save();

        return back()->with('success','marked as read');
    }
}
