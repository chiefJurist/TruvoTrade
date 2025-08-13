<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Transaction;

class DepositController extends Controller
{
    //index action
    public function index() {
        return view('deposits.index');
    }

    //create action
    public function create(Request $request)
    {
        $blockchain = $request->get('blockchain');
        $amount = $request->get('amount');

        // Example static addresses (can move to DB later)
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

        return view('deposits.create', compact('blockchain', 'amount', 'depositAddress'));
    }

    //store action
    public function store(Request $request){
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|string',
            'status' => 'required|string',
            'amount' => 'required|numeric',
            'from' => 'nullable|string',
            'hash' => 'nullable|string',
            'date' => 'required|date',
        ]);

        Deposit::create($validated);

        return redirect()->route('deposits.index')->with('success', 'Deposit created successfully.');
    }
}
