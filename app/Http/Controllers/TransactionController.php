<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //index action
    public function index() {
        $user = Auth::user();
        $transactions = Transaction::with('user')->where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(5);
        return view('transactions.index', compact('transactions'));
    }

    //show action
    public function show($id){
        $transaction = Transaction::findOrFail($id);
        return view('transactions.show', compact('transaction'));
    }
}