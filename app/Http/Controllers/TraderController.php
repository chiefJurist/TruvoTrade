<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Deposit;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TraderController extends Controller
{
    //overview action
    public function overview() {
        $user = Auth::user();
        //$totalDeposits = Deposit::where('status', 'successful')->sum('amount');
        $totalDeposits = Deposit::where('status', 'successful')->sum('amount');
        $totalWithdrawals = Withdrawal::where('status', 'successful')->sum('amount');
        $accounts = Account::where('user_id', $user->id)->get();
        return view('trader.overview', compact('totalDeposits', 'totalWithdrawals', 'accounts'));
    }

    //profile actions
    public function profile(Request $request) {
        return view('trader.profile');
    }

    //security action
    public function security() {
        return view("trader.security");
    }

    //investment action
    public function investment() {
        return view('trader.investment');
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

    //kyc action
    public function kyc() {
        return view('trader.kyc');
    }
}
