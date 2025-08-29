<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    //index action
    public function index() {
        return view('withdrawals.index');
    }

    //create action
    public function create(Request $request){
        $user = Auth::user();
        $amount = $request->get('amount');
        $method = $request->get('method');
        $accounts = Account::where('user_id', $user->id)->get();

        return view('withdrawals.create',compact('amount','method', 'accounts'));
    }

    //store action
    public function store(){
        //
    }
}
