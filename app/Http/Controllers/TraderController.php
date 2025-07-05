<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraderController extends Controller
{
    //overview action
    public function overview() {
        return view('trader.overview');
    }

    //profile action
    public function profile() {
        return view('trader.profile');
    }

    //investment action
    public function investment() {
        return view('trader.investment');
    }

    //plans action
    public function plans() {
        return view('trader.plans');
    }

    //transactions action
    public function transactions() {
        return view('trader.transactions');
    }

    //withdrawals action
    public function withdrawals() {
        return view('trader.withdrawals');
    }

    //deposits action
    public function deposits() {
        return view('trader.deposits');
    }

    //referrals action
    public function referrals() {
        return view('trader.referrals');
    }

    //test action
    public function test() {
        return view('trader.test');
    }
}
