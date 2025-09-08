<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function store(Request $request){
        //getting the user
        $user = Auth::user();

        //validating input
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1',
            'method' => 'required|string|max:255',
            'account' => 'required|string|max:255',
            'status'=> 'required|string|max:255',
        ]);

        //check if balance is enough
        if ($validated['amount'] > $user->balance) {
            return back()->with('amount','Insuficient balance');
        }

        //deduct balance
        DB::transaction(function () use ($user, $validated){
            $user->decrement('balance', $validated['amount']);
        });

        //save to database
        Withdrawal::create([
            'user_id'=> $user->id,
            'amount'=> $validated['amount'],
            'method'=> $validated['method'],
            'account'=> $validated['account'],
            'status'=> $validated['status'],
        ]);
    }
}
