<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\User\Bonuses;
use App\Http\Controllers\User\Dashboard;
use App\Http\Controllers\User\Deposits;
use App\Http\Controllers\User\Investments;
use App\Http\Controllers\User\Notifications;
use App\Http\Controllers\User\Referrals;
use App\Http\Controllers\User\Settings;
use App\Http\Controllers\User\Transfers;
use App\Http\Controllers\User\Wallets;
use App\Http\Controllers\User\Withdrawals;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your web.
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
| To access this endpoint, the prefix 'account' has to be added.
| You can change this in the RouteServiceProvider file
|
*/


Route::get('dashboard',[Dashboard::class,'landingPage'])->name('user.dashboard');

/*================ DEPOSIT ROUTE ====================*/
Route::get('deposits',[Investments::class,'landingPage'])->name('deposit.index');
Route::get('new_deposit',[Deposits::class,'newDeposit'])->name('new_deposit');
Route::post('process_deposit',[Deposits::class,'processDeposit'])->name('deposit.new');
Route::get('deposits/{id}/details',[Deposits::class,'depositDetails'])->name('deposit_detail');
Route::get('deposits/{id}/cancel',[Deposits::class,'cancel'])->name('deposit.cancel');
/*================ INVESTMENT ROUTE ====================*/
Route::get('investments',[Investments::class,'landingPage'])->name('investment.index');
Route::get('new_investment',[Investments::class,'newInvestment'])->name('new_investment');
Route::post('process_investment',[Investments::class,'processInvestment'])->name('investment.new');
Route::get('investments/{id}/details',[Investments::class,'investmentDetails'])->name('invest_detail');
Route::get('investments/{id}/cancel',[Investments::class,'cancel'])->name('invest.cancel');
/*================ WITHDRAWAL ROUTE ====================*/
Route::get('withdrawals',[Withdrawals::class,'landingPage'])->name('withdrawal.index');
Route::get('new_withdrawals',[Withdrawals::class,'newWithdrawal'])->name('new_withdrawal');
Route::post('process_withdrawal',[Withdrawals::class,'processWithdrawal'])->name('withdraw.new');
Route::get('withdrawals/{id}/cancel',[Withdrawals::class,'cancel'])->name('withdraw.cancel');
/*================ SETTINGS ROUTE ====================*/
Route::get('settings',[Settings::class,'landingPage'])->name('setting.index');
Route::post('update-settings',[Settings::class,'processSetting'])->name('settings.update');
Route::post('update-password',[Settings::class,'processPassword'])->name('password.update');
/*================ REFERRAL ROUTE ====================*/
Route::get('referral',[Referrals::class,'landingPage'])->name('referral.index');
Route::get('referrals',[Referrals::class,'landingPage'])->name('referral.indexes');
/*================ WALLETS ROUTE ====================*/
Route::get('wallets',[Wallets::class,'landingPage'])->name('wallet.index');
Route::post('wallet/add',[Wallets::class,'addWallet'])->name('wallet.add');
Route::post('wallet/delete',[Wallets::class,'deleteWallet'])->name('wallet.delete');
/*================ TRANSFERS ROUTE ====================*/
Route::get('transfer',[Transfers::class,'landingPage'])->name('transfer.index');
Route::get('transfers',[Transfers::class,'transfers'])->name('transfers.index');
Route::post('transfers/add',[Transfers::class,'addNew'])->name('transfers.new');
/*================ TRANSFERS ROUTE ====================*/
Route::get('bonus',[Bonuses::class,'landingPage'])->name('bonus.index');

Route::get('logout',[Login::class,'logout']);
/*================ NOTIFICATION ROUTE ====================*/
Route::get('notifications',[Notifications::class,'landingPage'])
    ->name('notification.index');
Route::get('notification/read/{id}',[Notifications::class,'markRead'])
    ->name('notification.read');
