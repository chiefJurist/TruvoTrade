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

        $deposits = $user->deposits()->paginate(5);

        return view('deposits.index', compact('deposits'));
    }

    //create action
    public function create(Request $request)
    {
        $blockchain = $request->get('blockchain');
        $amount = $request->get('amount');

        // Example static addresses (can move to DB later)
        $addresses = [
            'BITCOIN' => 'dummy_project_with_no_real_address',
            'ETHEREUM' => 'dummy_project_with_no_real_address',
            'SOLANA' => 'dummy_project_with_no_real_address',
            'USDT(BEP20)' => 'dummy_project_with_no_real_address',
            'USDT(TRX10)' => 'dummy_project_with_no_real_address',
            'USDC(BEP20)' => 'dummy_project_with_no_real_address',
            'BNB(BEP20)' => 'dummy_project_with_no_real_address',
            'TRON(TRX)' => 'dummy_project_with_no_real_address',
        ];

        $depositAddress = $addresses[$blockchain] ?? null;

        //return view('deposits.create', compact('blockchain', 'amount', 'depositAddress'));
        return view('trader.plans');
    }

    //store action
    public function store(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'blockchain' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'hash' => 'required|string|max:255',
        ]);

        // Create deposit
        Deposit::create([
            'user_id' => $user->id,
            'blockchain' => $validated['blockchain'],
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
            'amount' => $validated['amount'],
            'from' => $validated['from'],
            'to' => $validated['to'],
            'hash' => $validated['hash'],
        ]);

        return redirect()->route('deposits.index')->with('success', 'Deposit submitted successfully.');
    }


    //show action
    public function show(Deposit $deposit){
        $user = Auth::user();
        $deposit = $user->deposits->findOrFail($deposit->id);
        return view('deposits.show', compact('deposit'));
    }
}