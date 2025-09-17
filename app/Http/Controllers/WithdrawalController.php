<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{
    //index action
    public function index() {
        $user = Auth::user();
        $withdrawals = Withdrawal::where("user_id", $user->id)->orderBy('created_at', 'desc')->paginate(5);
        return view('withdrawals.index', compact('withdrawals'));
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
            'amount' => 'required|numeric|min:1000',
            'method' => 'required|string|max:255',
            'account' => 'required|string|max:255',
        ]);

        //check if balance is enough
        if ($validated['amount'] > $user->balance) {
            return back()->withErrors(['amount' => 'Insufficient balance'])->withInput();
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
        ]);

        //save to transaction table
        Transaction::create([
            'user_id' => $user->id,
            'type' => 'withdrawal',
            'amount' => $validated['amount'],
            'from' => $validated['method'],
            'to' => $validated['account'],
        ]);
    }

    //show action
    public function show($id){
        $withdrawal =Withdrawal::findOrFail($id);
        return view('withdrawals.show',compact('withdrawal'));
    }
}
