<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    //create action
    public function create(Request $request){
        $user = Auth::user();

        $amount = $request->get('amount');
        $profit = Investment::where('user_id', $user->id)
            ->where('status', 'successful')
            ->where('end', '<', Carbon::now())
            ->sum('profit');

        return view('transfer.create', compact('amount', 'profit'));
    }

    //store action
    public function store(Request $request){
        $user = Auth::user();

        //validate input
        $validated = $request->validate([
            'amount'=> 'required|numeric|min:01',
            'profit'=> 'required|numeric|min:1'
        ]);

        //checking if the profit balance is enough
        if ($validated['amount'] > $validated['profit']){
            return back()->withErrors(['amount' => 'Insufficient Token Balance'])->withInput();
        }
        
        //deduct profits balance 
        DB::transaction(function () use ($user, $validated) {
            $amountToDeduct = $validated['amount'];

            $investments = Investment::where('user_id', $user->id)
                ->where('status', 'successful')
                ->where('end', '<', now())
                ->where('profit', '>', 0)
                ->orderBy('end', 'asc')
                ->lockForUpdate()
                ->get();

            foreach ($investments as $investment) {
                if ($amountToDeduct <= 0) break;

                if ($investment->profit >= $amountToDeduct) {
                    $investment->decrement('profit', $amountToDeduct);
                    $amountToDeduct = 0;
                } else {
                    $amountToDeduct -= $investment->profit;
                    $investment->update(['profit' => 0]);
                }
            }
        });

        //Increase total balance
        DB::transaction(function () use ($user, $validated){
            $user->increment('balance', $validated['amount']);
        });

        //save to database
        Transaction::create([
            'user_id'=> $user->id,
            'type'=> 'profit transfer',
            'amount' => $validated['amount'],
            'from' => 'investment',
            'to'=> 'balance',
            'status'=> 'successful',
        ]);

        //redirect
        return redirect()->route('investments.index')->with('success', 'Profit transferred successfully.');
    }
}
