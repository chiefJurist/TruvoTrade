<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Deposit;
use App\Models\Kyc;
use App\Models\Token;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class TraderController extends Controller
{
    //overview action
    public function overview() {
        $user = Auth::user();
        $totalDeposits = Deposit::where('user_id', $user->id)->where('status', 'successful')->sum('amount');
        $totalWithdrawals = Withdrawal::where('user_id', $user->id)->where('status', 'successful')->sum('amount');
        $accounts = Account::where('user_id', $user->id)->get();
        $kyc = Kyc::where('user_id', Auth::id())->where('status', 'approved')->get();
        $tokens = Token::with('user')->where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(5);

        return view('trader.overview', compact('totalDeposits', 'totalWithdrawals', 'accounts', 'kyc', 'tokens'));
    }

    //profile actions
    public function profile() {
        return view('trader.profile');
    }

    //security action
    public function security() {
        $kyc = Kyc::where('user_id', Auth::id())
            ->latest() // latest submission
            ->first(); // just one record
        return view("trader.security", compact('kyc'));
    }

    //plans action
    public function plans() {
        return view('trader.plans');
    }

    //withdrawals action
    public function withdrawals() {
        return view('withdrawals.index');
    }

    //deposits action
    public function deposits() {
        return view('deposits.index');
    }

    //referrals action
    public function referrals() {
        return view('trader.referrals');
    }

    //update password
    public function updatePassword(Request $request){
        $request->validate([
            'currentpassword' => ['required'],
            'password' => ['required', 'string','min:8', 'confirmed']
        ]);

        $user = Auth::user();

        //check if the old password is correct
        if (!Hash::check($request->currentpassword, $user->password)) {
            throw ValidationException::withMessages([
                'currentpassword' => 'Your current password is incorrect.',
            ]);
        }

        //update password
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success','Password Updated Successfully');
    }
}
