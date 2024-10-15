<?php

use App\Http\Controllers\Admin\Coins;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Deposits;
use App\Http\Controllers\Admin\Investments;
use App\Http\Controllers\Admin\Investors;
use App\Http\Controllers\Admin\Packages;
use App\Http\Controllers\Admin\Settings;
use App\Http\Controllers\Admin\WebSettings;
use App\Http\Controllers\Admin\Withdrawals;
use App\Http\Controllers\Auth\Login;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your web.
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
| To access this endpoint, the prefix 'admin' has to be added.
| You can change this in the RouteServiceProvider file
|
*/


Route::get('dashboard',[Dashboard::class,'landingPage'])->name('admin.dashboard');

/*================ DEPOSIT ROUTE ====================*/
Route::get('deposits',[Deposits::class,'landingPage'])->name('deposit.index');
Route::get('transfers',[Deposits::class,'transfers'])->name('transfer.index');
Route::get('deposits/{id}/details',[Deposits::class,'depositDetails'])->name('deposit_detail');
Route::get('deposits/{id}/cancel',[Deposits::class,'cancel'])->name('deposit.cancel');
Route::get('deposits/{id}/approve',[Deposits::class,'approve'])->name('deposit.approve');
/*================ INVESTMENT ROUTE ====================*/
Route::get('investments',[Investments::class,'landingPage'])->name('investment.index');
Route::get('investments/{id}/details',[Investments::class,'investmentDetails'])->name('invest_detail');
Route::get('investments/{id}/cancel',[Investments::class,'cancel'])->name('invest.cancel');
Route::get('investments/{id}/start',[Investments::class,'startInvestment'])->name('invest.start');
Route::get('investments/{id}/complete',[Investments::class,'completeInvestment'])->name('invest.complete');
/*================ WITHDRAWAL ROUTE ====================*/
Route::get('withdrawals',[Withdrawals::class,'landingPage'])->name('withdrawal.index');
Route::get('withdrawals/{id}/cancel',[Withdrawals::class,'cancel'])->name('withdraw.cancel');
Route::get('withdrawals/{id}/approve',[Withdrawals::class,'approve'])->name('withdraw.approve');
/*================ SETTINGS ROUTE ====================*/
Route::get('settings',[Settings::class,'landingPage'])->name('setting.index');
Route::post('update-settings',[Settings::class,'processSetting'])->name('settings.update');
Route::post('update-password',[Settings::class,'processPassword'])->name('password.update');
/*================ WEB SETTINGS ROUTE ====================*/
Route::get('general_settings',[WebSettings::class,'landingPage'])->name('general_settings');
Route::post('general_settings',[WebSettings::class,'processSettings'])->name('general.settings');
/*=============== INVESTMENT PACKAGE ROUTE ==============================*/
Route::get('packages',[Packages::class,'landingPage'])->name('package.index');
Route::get('package/{id}/edit',[Packages::class,'edit'])->name('package.edit');
Route::post('package',[Packages::class,'updatePackage'])->name('package.update');
Route::get('package/{id}/delete',[Packages::class,'delete'])->name('package.delete');
Route::get('package/create',[Packages::class,'create'])->name('package.create');
Route::post('package/new',[Packages::class,'newPackage'])->name('package.new');
/*=============== COINS ROUTE ==============================*/
Route::get('coins',[Coins::class,'landingPage'])->name('coin.index');
Route::get('coin/{id}/edit',[Coins::class,'edit'])->name('coin.edit');
Route::post('coin',[Coins::class,'updateCoin'])->name('coin.update');
Route::get('coin/{id}/delete',[Coins::class,'delete'])->name('coin.delete');
Route::get('coin/create',[Coins::class,'create'])->name('coin.create');
Route::post('coin/new',[Coins::class,'newCoin'])->name('coin.new');
/*================ SETTINGS ROUTE ====================*/
Route::get('settings',[Settings::class,'landingPage'])->name('setting.index');
Route::post('update-settings',[Settings::class,'processSetting'])->name('settings.update');
Route::post('update-password',[Settings::class,'processPassword'])->name('password.update');
/*=============== INVESTOR ROUTE ==============================*/
Route::get('investors',[Investors::class,'landingPage'])->name('investor.index');
Route::get('investors/inactive',[Investors::class,'inactive'])->name('investor.inactive');
Route::get('investors/{id}/details',[Investors::class,'details'])->name('investor.detail');
Route::get('investors/{id}/verify-email',[Investors::class,'verifyEmail'])->name('investor.verify.email');
Route::get('investors/{id}/activate-twoway',[Investors::class,'activateTwoWay'])->name('investor.activate.twoway');
Route::get('investors/{id}/unverify-email',[Investors::class,'unVerifyEmail'])->name('investor.unverify.email');
Route::get('investors/{id}/deactivate-twoway',[Investors::class,'deactivateTwoWay'])
    ->name('investor.deactivate.twoway');
Route::get('investors/{id}/activate-user',[Investors::class,'activateUser'])
    ->name('investor.activate.user');
Route::get('investors/{id}/deactivate-user',[Investors::class,'deactivateUser'])
    ->name('investor.deactivate.user');
Route::post('investors/addFund',[Investors::class,'addFund'])
    ->name('investor.addFund');
Route::post('investors/subFund',[Investors::class,'subFund'])
    ->name('investor.subFund');
Route::post('investors/addProfit',[Investors::class,'addProfit'])
    ->name('investor.addProfit');
Route::post('investors/subProfit',[Investors::class,'subProfit'])
    ->name('investor.subProfit');
Route::post('investors/addRef',[Investors::class,'addRef'])
    ->name('investor.addRef');
Route::post('investors/subRef',[Investors::class,'subRef'])
    ->name('investor.subRef');
Route::post('investors/addWith',[Investors::class,'addWith'])
    ->name('investor.addWith');
Route::post('investors/subWith',[Investors::class,'subWith'])
    ->name('investor.subWith');
Route::get('investors/{id}/deactivate-loan',[Investors::class,'deactivateLoan'])
    ->name('investor.deactivate.loan');
Route::get('investors/{id}/activate-loan',[Investors::class,'activateLoan'])
    ->name('investor.activate.loan');
Route::post('investors/addLoan',[Investors::class,'addLoan'])
    ->name('investor.addLoan');
Route::post('investors/subLoan',[Investors::class,'subLoan'])
    ->name('investor.subLoan');
//Logout
Route::get('logout',[Login::class,'logout']);
