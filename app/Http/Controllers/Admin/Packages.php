<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Package;
use App\Models\ReturnType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Packages extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Packages',
            'user'     =>  $user,
            'web'=>$web,
            'packages'=>Package::get()
        ];

        return view('admin.packages',$dataView);
    }

    public function edit($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $package = Package::where('id',$id)->first();
        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'Edit Packages',
            'user'     =>  $user,
            'web'=>$web,
            'package'=>$package,
            'returnTypes'=>ReturnType::get(),
            'returnType'=>ReturnType::where('id',$package->returnType)->first(),
        ];

        return view('admin.package_detail',$dataView);
    }

    public function updatePackage(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'id'=>['required','numeric'],
            'minAmount'=>['required','numeric'],
            'maxAmount'=>['nullable','numeric'],
            'roi'=>['required','numeric'],
            'name'=>['required','string'],
            'duration'=>['required','string'],
            'returnType'=>['required','numeric'],
            'numberOfReturns'=>['required','numeric'],
            'status'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        //check if the max is included
        if ($request->filled('maxAmount')){
            $unlimited = 2;
        }else{
            $unlimited = 1;
        }

        $dataPackage = [
            'name'=>$input['name'],'minAmount'=>$input['minAmount'],'maxAmount'=>$input['maxAmount'],
            'roi'=>$input['roi'],'numberOfReturns'=>$input['numberOfReturns'],'Duration'=>$input['duration'],
            'returnType'=>$input['returnType'],'status'=>$input['status'],'isUnlimited'=>$unlimited
        ];

        Package::where('id',$input['id'])->update($dataPackage);

        return back()->with('success','Package Updated');
    }

    public function delete($id)
    {
        Package::where('id',$id)->delete();
        return back()->with('success','Deleted');
    }

    public function create()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView =[
            'siteName' => $web->name,
            'pageName' => 'New Packages',
            'user'     =>  $user,
            'web'=>$web,
            'returnTypes'=>ReturnType::get(),
        ];

        return view('admin.new_package',$dataView);
    }
    public function newPackage(Request $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->input(),[
            'minAmount'=>['required','numeric'],
            'maxAmount'=>['nullable','numeric'],
            'roi'=>['required','numeric'],
            'name'=>['required','string'],
            'duration'=>['required','string'],
            'returnType'=>['required','numeric'],
            'numberOfReturns'=>['required','numeric'],
            'status'=>['required','numeric'],
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        //check if the max is included
        if ($request->filled('maxAmount')){
            $unlimited = 2;
        }else{
            $unlimited = 1;
        }

        $dataPackage = [
            'name'=>$input['name'],'minAmount'=>$input['minAmount'],'maxAmount'=>$input['maxAmount'],
            'roi'=>$input['roi'],'numberOfReturns'=>$input['numberOfReturns'],'Duration'=>$input['duration'],
            'returnType'=>$input['returnType'],'status'=>$input['status'],'isUnlimited'=>$unlimited
        ];

        Package::create($dataPackage);

        return back()->with('success','Package Added');
    }
}
