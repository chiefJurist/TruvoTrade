<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;

class TraderController extends Controller
{
    //overview action
    public function overview() {
        //$totalDeposits = Deposit::where('status', 'successful')->sum('amount');
        $totalDeposits = Deposit::where('status', 'successful')->sum('amount');
        return view('trader.overview', compact('totalDeposits'));
    }

    //profile actions
    public function profile(Request $request) {
        $section = $request->query('section', 'trader.profile'); // Defaults to 'profile'
        return view('trader.profile', compact('section'));
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
