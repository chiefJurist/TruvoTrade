<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    //index action
    public function index() {
        $user = Auth::user();
        $deposits = Deposit::with('user')->where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(5);
        return view('deposits.index', compact('deposits'));
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
        $user = Auth::user();

        $validated = $request->validate([
            'blockchain' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'hash' => 'required|string|max:255',
        ]);

        // Create deposit
        Deposit::create([
            'user_id' => $user->id,
            'blockchain' => $validated['blockchain'],
            'status' => $validated['status'],
            'amount' => $validated['amount'],
            'from' => $validated['from'],
            'to' => $validated['to'],
            'hash' => $validated['hash'],
        ]);

        // Create transaction
        Transaction::create([
            'user_id' => $user->id,
            'type' => 'deposit',
            'blockchain' => $validated['blockchain'],
            'status' => $validated['status'],
            'amount' => $validated['amount'],
            'from' => $validated['from'],
            'to' => $validated['to'],
            'hash' => $validated['hash'],
        ]);

        return redirect()->route('deposits.index')->with('success', 'Deposit submitted successfully.');
    }


    //show action
    public function show($id){
        $deposit = Deposit::findOrFail($id);
        return view('deposits.show', compact('deposit'));
    }
}
