<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    //index action
    public function index() {
        return view('withdrawals.index');
    }
}
