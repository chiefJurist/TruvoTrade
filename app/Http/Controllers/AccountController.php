<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //index action
    public function index() {
        return view('accounts.index');
    }
}
