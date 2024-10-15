<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendInvestmentNotification;
use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\Loan;
use App\Models\Transfer;
use App\Models\User;
use App\Notifications\DepositMail;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Deposits extends Controller
{
    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'deposits'=>Deposit::get(),
            'pageName'=>'Deposit Lists',
            'siteName'=>$web->name
        ];

        return view('admin.deposits',$dataView);
    }

    public function depositDetails($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $deposit = Deposit::findOrFail($id);

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'deposit'=>$deposit,
            'pageName'=>'Deposit Details',
            'siteName'=>$web->name,
            'investor'=>User::where('id',$deposit->user)->first()
        ];

        return view('admin.deposit_details',$dataView);
    }

    public function approve($id)
    {
        $web = GeneralSetting::find(1);
        Auth::user();

        $deposit = Deposit::where('id',$id)->first();

        $investor = User::where('id',$deposit->user)->first();

        $dataDeposit = ['status'=>1];

        $update = Deposit::where('id',$id)->update($dataDeposit);
        if ($update) {
            $dataUser = ['balance'=>$investor->balance+$deposit->amount];

            User::where('id',$investor->id)->update($dataUser);
            //send mail to investor
            $userMessage = "
                Your deposit of $<b>" . $deposit->amount . " worth of " . $deposit->asset . "</b>
                has been received and your payment credited to your account. You can proceed to investing.
            ";
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Deposit Received');
            $investor->notify(new InvestmentMail($investor, $userMessage, 'Deposit Received'));
            //check if user has referral
            if ($investor->referral != 0 && !empty($investor->referral)) {
                $refBonus = $deposit->amount * ($web->refBonus / 100);

                $referral = User::where('id', $investor->referral)->first();
                $dataReferral = [
                    'refBal' => $referral->refBal + $refBonus
                ];
                $creditReferral = User::where('id', $referral->id)->update($dataReferral);
                if ($creditReferral) {
                    //send mail to referral
                    $userMessages = "
                      Your referral balance on " . $web->name . " has been credited with $<b>" . $refBonus . " from your
                      downliner.
                    ";
                    //SendInvestmentNotification::dispatch($referral, $userMessage, 'Referral Bonus Received');
                    $referral->notify(new InvestmentMail($referral,$userMessages, 'Referral Bonus Received'));
                }
            }
        }
        return back()->with('success','Deposit approved');
    }

    public function cancel($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $deposit = Deposit::findOrFail($id);

        $deposit->status = 3;

        $deposit->save();

        return back()->with('warning','Deposit cancelled');

    }

    public function loans()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'loans'=>Loan::get(),
            'pageName'=>'Loans',
            'siteName'=>$web->name
        ];

        return view('admin.loans',$dataView);
    }

    public function loanDetails($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $loan = Loan::findOrFail($id);

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'loan'=>$loan,
            'pageName'=>'Loan Details',
            'siteName'=>$web->name,
            'investor'=>User::where('id',$loan->user)->first()
        ];

        return view('admin.loan_detail',$dataView);
    }

    public function approveLoan($id)
    {
        $web = GeneralSetting::find(1);
        Auth::user();

        $deposit = Loan::where('id',$id)->first();

        $investor = User::where('id',$deposit->user)->first();

        $dataDeposit = ['status'=>4];

        $update = Loan::where('id',$id)->update($dataDeposit);
        if ($update) {
            $dataUser = ['balance'=>$investor->balance+$deposit->amount];

            User::where('id',$investor->id)->update($dataUser);
            //send mail to investor
            $userMessage = "
                Your Loan Request of $<b>" . number_format($deposit->amount,2). "</b>
                has been approved and your loan credited to your account.
            ";
            //SendInvestmentNotification::dispatch($investor, $userMessage, 'Deposit Received');
            $investor->notify(new InvestmentMail($investor, $userMessage, 'Loan Approved'));
        }
        return back()->with('success','Loan approved');
    }

    public function cancelLoan($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $deposit = Loan::findOrFail($id);

        $deposit->status = 3;

        $deposit->save();

        return back()->with('warning','Loan cancelled');

    }

    public function paidLoan($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $deposit = Loan::findOrFail($id);

        $deposit->status = 1;

        $deposit->save();

        return back()->with('warning','Loan Marked as Paid');

    }

    public function transfers()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'deposits'=>Transfer::get(),
            'pageName'=>'Transfer Lists',
            'siteName'=>$web->name
        ];

        return view('admin.transfers',$dataView);
    }
}
