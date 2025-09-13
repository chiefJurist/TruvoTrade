<?php

namespace App\Http\Controllers;

use App\Models\Token;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    //create action
    public function create(Request $request){
        $user = Auth::user();

        $blockchain = strtoupper($request->get('blockchain'));
        $token = $request->get('token');
        $cost = $request->get('cost');
        
        $addresses = [
            'BITCOIN' => 'bc1qq4hm9ppkxzsle6gjcsgvvuu2xnp27ww0jxzuwx',
            'ETHEREUM' => '0xb94936c4a73db6c75cf2db68bd2a70885eac469c',
            'SOLANA' => '8NKjAiyfRvsewGuKdt6foruAgd2SeCRy8bC9zBqy1Zuo',
            'USDT(BEP20)' => '0xb94936c4a73db6c75cf2db68bd2a70885eac469c',
            'USDT(TRX10)' => 'TZGYz3Cz25oAoAaJyhfSXjSDc9SH5u9TBM',
            'USDC(BEP20)' => '0xb94936c4a73db6c75cf2db68bd2a70885eac469c',
            'BNB(BEP20)' => '0xb94936c4a73db6c75cf2db68bd2a70885eac469c',
            'TRON(TRX)' => 'TZGYz3Cz25oAoAaJyhfSXjSDc9SH5u9TBM',
        ];

        $depositAddress = $addresses[$blockchain] ?? null;

        return view('tokens.create', compact('blockchain','token','cost','depositAddress'));
    }

    //store action
    public function store(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'blockchain'=> 'required|string|max:255',
            'token'=> 'required|numeric|min:0.5',
            'cost'=> 'required|numeric|min:5',
            'address'=>'required|string|max:255',
            'hash'=> 'required|string|max:255',
        ]);

        Token::create([
            'user_id' => $user->id,
            'blockchain'=> $validated['blockchain'],
            'token'=> $validated['token'],
            'cost'=> $validated['cost'],
            'address'=> $validated['address'],
            'hash'=> $validated['hash'],
        ]);

        Transaction::create([
            'user_id'=> $user->id,
            'type'=> 'Token Purchase',
            'blockchain'=> $validated['blockchain'],
            'amount' => $validated['cost'],
            'from'=> 'External Deposit',
            'to'=> $validated['address'],
            'hash'=> $validated['hash'],
        ]);

        return redirect()->route('trader.overview')->with('success', 'Deposit submitted successfully.');
    }

    //show action
    public function show($id) {
        $token = Token::findOrFail($id);
        return view('tokens.show', compact('token'));
    }
}
