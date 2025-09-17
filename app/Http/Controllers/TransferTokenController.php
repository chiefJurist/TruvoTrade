<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransferTokenController extends Controller
{
    //create action
    public function create(Request $request){
        $amount = $request->get('amount');
        $tokens = $request->get('tokens');

        return view('tokens-transfer.create',compact('amount','tokens'));
    }

    //store action
    public function store(Request $request){
        $user = Auth::user();

        //validate input
        $validated = $request->validate([
            'amount'=> 'required|numeric|min:10',
        ]);

        //checking if the token balance is enough
        if ($validated['amount'] > $user->tokens){
            return back()->withErrors(['amount' => 'Insufficient Token Balance'])->withInput();
        }
        
        //deduct tokens balance 
        DB::transaction(function () use ($user, $validated){
            $user->decrement('tokens', $validated['amount']);
        });

        //Increase total balance
        DB::transaction(function () use ($user, $validated){
            $user->increment('balance', $validated['amount']*50);
        });

        //save to database
        Transaction::create([
            'user_id'=> $user->id,
            'type'=> 'token transfer',
            'amount' => $validated['amount']*50,
            'from' => 'bot',
            'to'=> 'balance'
        ]);
    }
}
