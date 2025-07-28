<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    //index action
    public function index() {
        return view('deposits.index');
    }
}
