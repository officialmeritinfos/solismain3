<?php
namespace App\Defaults;

use App\Models\Notification;
use App\Models\Package;
use App\Models\ReturnType;
use App\Models\Service;
use App\Models\User;

class Custom{

    public function getInvestor($id)
    {
        $user = User::where('id',$id)->first();
        return $user->name;
    }
    public function getInvestorUsername($id)
    {
        $user = User::where('id',$id)->first();
        return $user->username;
    }
    public function getInvestorNameByUsername($user)
    {
        $user = User::where('username',$user)->first();
        return $user->name;
    }

    public function getReturnType($id)
    {
        $type = ReturnType::where('id',$id)->first();
        return $type->name;
    }
    public function getServices()
    {
        return Service::where('showInList',1)->get();
    }

    public function getService($id)
    {
        return Service::where('id',$id)->first();
    }

    public function getPackagesByService($id)
    {
        return Package::where(['service'=>$id,'status'=>1])->get();
    }

    public function getPlanNumberService($id)
    {
        return Package::where('service',$id)->get();
    }

    public function getUserNotificationsUnread($user)
    {
        return Notification::where(['user'=>$user,'status'=>2])->limit(5)->get();
    }

    public function getServiceName($id)
    {
        $service =  Service::where('id',$id)->first();
        return $service->title;
    }
}
