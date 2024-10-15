<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Package;
use App\Models\Service;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Home Page',
            'packages'  => Package::where('status',1)->get(),
            'deposits'=>Investment::where('status','1')->orWhere('status','1')->orderBy('id','desc')->limit(10)->get(),
            'withdrawals'=>Withdrawal::where('status','!=',3)->orderBy('id','desc')->limit(10)->get(),
        ];

        return view('home.home',$dataView);
    }

    public function about()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'About Us',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.about',$dataView);
    }
    public function terms()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Terms and Conditions',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.terms',$dataView);
    }
    public function legal()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Legal Information',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.legal',$dataView);
    }
    public function privacy()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Privacy Policy',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.privacy',$dataView);
    }
    public function faqs()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Frequently Asked Questions',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.faq',$dataView);
    }
    public function estate()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Real Estates',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.estates',$dataView);
    }
    public function contact()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Contact us',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.contact',$dataView);
    }
    public function buyBtc()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Where to Buy Bitcoin, Ethereum, Litecoin...',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.buy_btc',$dataView);
    }
    public function markets()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Global Market',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.markets',$dataView);
    }
    public function services()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Services',
            'packages'  => Package::where('status',1)->get(),
            'services'  =>Service::where('status',1)->get()
        ];

        return view('home.service',$dataView);
    }
    public function serviceDetail($id)
    {
        $web = GeneralSetting::where('id',1)->first();

        $service = Service::where('id',$id)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => $service->title,
            'packages'  => Package::where('status',1)->get(),
            'service'   => $service
        ];

        return view('home.service_details',$dataView);
    }
    public function plans()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Flexible Packages for Everyone',
            'services'  => Service::orderBy('title','asc')->get()
        ];

        return view('home.plans',$dataView);
    }
    public function planDetails($id)
    {
        $web = GeneralSetting::where('id',1)->first();

        $service = Service::where('id',$id)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => $service->title,
            'packages'  => Package::where('service',$id)->get(),
            'service'   => $service
        ];

        return view('home.plan_details',$dataView);
    }
    public function blog()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'News for Everyone',
            'services'  => Service::orderBy('title','asc')->get()
        ];

        return view('home.blog',$dataView);
    }
    public function estateHouse()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Real Estates House',
            'packages'  => Package::where('status',1)->get()
        ];

        return view('home.estate_house',$dataView);
    }
}

