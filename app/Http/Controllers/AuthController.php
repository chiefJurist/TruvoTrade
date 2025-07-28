<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //viewing login page
    public function showLogin()  {
        return view('auth.login');
    }

    //viewing register page
    public function showRegister() {
        return view('auth.register');
    }

    //viewing forgot password
    public function forgotPassword()  {
        return view('auth.forgot-password');
    }
}
