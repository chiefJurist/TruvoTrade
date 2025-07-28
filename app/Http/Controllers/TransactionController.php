<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //index action
    public function index() {
        return view('transactions.index');
    }
}
