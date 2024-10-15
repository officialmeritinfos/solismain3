<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\RecoverPassword;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\Investments;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('index',[HomeController::class,'index']);
Route::get('about',[HomeController::class,'about']);
Route::get('plans',[HomeController::class,'plans']);
Route::get('plans/{id}/details',[HomeController::class,'planDetails'])
    ->name('plan_details');
Route::get('terms',[HomeController::class,'terms']);
Route::get('terms',[HomeController::class,'terms']);
Route::get('services',[HomeController::class,'services']);
Route::get('services/{id}',[HomeController::class,'serviceDetail'])
    ->name('service_detail');
Route::get('faqs',[HomeController::class,'faqs']);
Route::get('faq',[HomeController::class,'faqs']);
Route::get('estate',[HomeController::class,'estate']);
Route::get('estate_house',[HomeController::class,'estateHouse']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('loan',[HomeController::class,'loan']);
Route::get('legal',[HomeController::class,'legal']);
Route::get('privacy',[HomeController::class,'privacy']);
Route::get('buy-btc',[HomeController::class,'buyBtc']);
Route::get('markets',[HomeController::class,'markets']);
Route::get('register',[Register::class,'landingPage']);
Route::get('service/package/{id}',[Investments::class,'getServicePackages']);
Route::get('package/{id}',[Investments::class,'getPackageDetails']);
Route::get('blog',[HomeController::class,'blog']);



