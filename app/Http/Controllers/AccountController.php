<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //index action
    public function index() {
        return view('accounts.index');
    }

    //store action
    public function store(Request $request){
        $user = Auth::user();

        //Validating The Input
        $validated = $request->validate([
            'type'=> 'required|string|max:255',
            'wallet_chain'=> 'string|max:255',
            'wallet_address'=> 'string|max:255',
            'account_type'=> 'string|max:255',
            'account_name' => 'string|max:255',
            'account_number' => 'integer|max:50',
            'bank_country' => 'string|max:255',
            'bank_currency' => 'string|max:255',
            'bank_name' => 'string|max:255',
            'branch_name' => 'string|max:255',
            'sort_code' => 'string|max:255',
            'routing_number' => 'integer|max:50',
            'swift_code' => 'string|max:255',
            'iban_number' => 'integer|max:50',
            'label_of_account'=> 'required|string|max:255',
        ]);

        //Creating The Withdrawal Account
        Account::create([
            'user_id'=> $user->id,
            'type'=> $validated['type'],
            'wallet_chain'=> $validated['wallet_chain'],
            'wallet_address'=> $validated['wallet_address'],
            'account_type'=> $validated['account_type'],
            'account_name'=> $validated['account_name'],
            'account_number'=> $validated['account_number'],
            'bank_country'=> $validated['bank_country'],
            'bank_currency'=> $validated['bank_currency'],
            'bank_name'=> $validated['bank_name'],
            'sort_code'=> $validated['sort_code'],
            'routing_number'=> $validated['routing_number'],
            'swift_code'=> $validated['swift_code'],
            'iban_number'=> $validated['iban_number'],
            'label_of_account'=> $validated['label_of_account'],
        ]);

        return redirect()->route('accounts.index')->with('success','Account Created Successfully');
    }
}
