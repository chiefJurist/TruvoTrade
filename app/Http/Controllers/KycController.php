<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KycController extends Controller
{
    //index action
    public function index(){
        return view('kyc.index');
    }
}
