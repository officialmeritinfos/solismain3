<?php

namespace App\Http\Controllers\User;

use App\Defaults\Regular;
use App\Defaults\Wallet;
use App\Http\Controllers\Controller;
use App\Jobs\SendDepositNotification;
use App\Models\Coin;
use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Package;
use App\Models\Service;
use App\Models\User;
use App\Notifications\InvestmentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class Deposits extends Controller
{
    use Regular,Wallet;

    public function landingPage()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'investments'=>Investment::where('user',$user->id)->paginate(15),
            'pageName'=>'Investment Lists',
            'siteName'=>$web->name,
            'services'=>Service::get(),
        ];

        return view('user.deposits',$dataView);
    }

    public function newDeposit()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'pageName'=>'Make Deposit',
            'siteName'=>$web->name,
            'packages'=>Package::where('status',1)->get(),
            'coins'=>Coin::where('status',1)->get(),
            'services'=>Service::get(),
            'investments'=>Investment::where(['user'=>$user->id])->limit(5)->get(),
        ];

        return view('user.new_deposit',$dataView);
    }

    public function depositDetails($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $deposit = Deposit::where('user',$user->id)->findOrFail($id);

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'deposit'=>$deposit,
            'pageName'=>'Deposit Details',
            'siteName'=>$web->name
        ];

        return view('user.deposit_details',$dataView);
    }

    public function cancel($id)
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $deposit = Deposit::where('user',$user->id)->findOrFail($id);

        if ($deposit->status ==3){
            return back()->with('error','Deposit already cancelled. Please contact support for help');
        }
        $data=[
            'status'=>3
        ];
        $update = Deposit::where('id',$id)->update($data);

        if ($update){
            //check if admin exists
            $admin = User::where('is_admin',1)->first();
            $userMessage = "
                Your deposit with reference: <b>".$deposit->reference."</b> has been cancelled.
            ";
            //send mail to user
            //SendDepositNotification::dispatch($user,$userMessage,'Deposit Cancelled');
            $user->notify(new InvestmentMail($user,$userMessage,'Deposit Cancelled'));
            //send mail to Admin
            if (!empty($admin)){
                $adminMessage = "
                    The deposit request with reference <b>".$deposit->reference."</b> placed by the
                    investor <b>".$user->name."</b> has been cancelled.
                ";
                //SendDepositNotification::dispatch($admin,$adminMessage,'New Deposit Cancelled');
                $admin->notify(new InvestmentMail($admin,$adminMessage,'New Deposit Cancelled'));
            }
        }
        return back()->with('error','Something went wrong');
    }

    public function loans()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'loans'=>Loan::where('user',$user->id)->paginate(10),
            'pageName'=>'Loans',
            'siteName'=>$web->name
        ];

        return view('user.loans',$dataView);
    }

    public function create_loan()
    {
        $web = GeneralSetting::find(1);
        $user = Auth::user();

        $dataView = [
            'web'=>$web,
            'user'=>$user,
            'deposits'=>Deposit::where('user',$user->id)->get(),
            'pageName'=>'New Loan',
            'siteName'=>$web->name
        ];

        return view('user.new_loan',$dataView);
    }

    public function newLoan(Request  $request)
    {
        $web = GeneralSetting::where('id',1)->first();
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'amount'=>['required','numeric'],
            'address'=>['required','string'],
            'dateRequest'=>['required','date'],
            'collectionDate'=>['required','date'],
            'purpose'=>['required','string'],
            'signature'=>['required','mimes:jpg,gif,png,jpeg']
        ]);

        if ($validator->fails()){
            return back()->with('errors',$validator->errors());
        }
        $input = $validator->validated();

        $reference = $this->generateId('deposits','reference',15);

        //try moving the signature
        //upload necessary files uploaded
        $signature = time() . '_' . $request->file('signature')->hashName();
        $request->file('signature')->move(public_path('dashboard/uploads/'), $signature);
        //check if the file was moved successfully
        $move = File::exists(public_path('dashboard/uploads/'.$signature));
        if ($move !=true){
            return back()->with('error','Unable to upload signature');
        }

        $loan = Loan::create([
            'reference'=>$reference,
            'user'=>$user->id,
            'amount'=>$input['amount'],
            'phoneNumber'=>$user->phone,
            'address'=>$input['address'],
            'fundDate'=>$input['dateRequest'],
            'collectionDate'=>$input['collectionDate'],
            'purpose'=>$input['purpose'],
            'signature'=>$signature
        ]);
        if (!empty($loan)){
            //send message to user
            $message = "
                Your loan request of $".$input['amount']." has been received and is receiving proper attention.
                A staff will reach out to you soon.
            ";
            $user->notify(new InvestmentMail($user,$message,'Loan Request received.'));
            //message admin
            $admin = User::where('is_admin',1)->first();
            if (!empty($admin)){

                $messageToAdmin="
                    A new loan request has been received from the user ".$user->name." for the sum
                    of $".$input['amount'].". Loan reference is <b>".$reference."</b>.
                ";
                $admin->notify(new InvestmentMail($admin,$messageToAdmin,'New Loan Request'));
            }

            return redirect()->to(route('loan.index'))->with('success','Loan request was successful.');
        }
        return back()->with('error','Something went wrong. Please contact support');
    }
}
