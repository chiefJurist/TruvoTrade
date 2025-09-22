<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvestmentController extends Controller
{
    //index action
    public function index(){
        $user = Auth::user();
        $investments = Investment::where('user_id', $user->id)->where('status', 'successful')->get();
        $currentInvestments = Investment::where('user_id', $user->id)
            ->where('status', 'successful')
            ->where('end', '>', Carbon::now())
            ->sum('amount');
        $profit = Investment::where('user_id', $user->id)
            ->where('status', 'successful')
            ->where('end', '<', Carbon::now())
            ->sum('profit');
        return view('investments.index', compact('investments', 'currentInvestments'));
    }

    //create action
    public function create(Request $request){
        $plan = $request->get('plan');
        $amount = $request->get('amount');
        $minimum = $request->get('minimum');
        $maximum = $request->get('maximum');
        $interest = $request->get('interest');
        $end = Carbon::now()->addDays((int)$request->get('end'));

        return view('investments.create', compact('plan', 'amount','minimum','maximum', 'interest', 'end'));
    }

    //store action
    public function store(Request $request){
        $user = Auth::user();

        $validated = $request->validate([
            'plan'=> 'required|string|max:255',
            'amount'=> 'required|numeric',
            'minimum'=> 'required|string|max:255',
            'maximum'=> 'required|string|max:255',
            'interest'=> 'required|numeric|max:85|min:45',
            'end'=> 'required|date',
        ]);

        //check minimum limit
        if ($validated['amount'] < $validated['minimum']) {
            return back()->withErrors(['amount' => 'You are below the minimum for this plan'])->withInput();
        }

        //check if the balance is enough
        if ($validated['amount'] > $user->balance) {
            return back()->withErrors(['amount' => 'Insufficient balance'])->withInput();
        }

        //check maximum limit
        if ($validated['amount'] > $validated['maximum']) {
            return back()->withErrors(['amount' => 'You have exceeded the maximum for this plan'])->withInput();
        }

        //deduct balance
        DB::transaction(function() use($user, $validated) {
            $user->decrement('balance', $validated['amount']);
        });

        Investment::create([
            'user_id'=> $user->id,
            'plan'=> $validated['plan'],
            'amount'=> $validated['amount'],
            'minimum'=> $validated['minimum'],
            'maximum'=> $validated['maximum'],
            'status'=> 'successful',
            'interest'=> $validated['interest'],
            'end'=> $validated['end']
        ]);

        Transaction::create([
            'user_id'=> $user->id,
            'type' => 'investment',
            'amount'=> $validated['amount'],
            'status'=> 'successful',
            'from'=> 'balance',
            'to'=> 'investment account',
        ]);

        return redirect()->route('investments.index')->with('success','Investment made successfully');
    }

    //show action
    public function show($id){
        $investment = Investment::findOrFail($id);
        return view('investments.show', compact('investment'));
    }
}
