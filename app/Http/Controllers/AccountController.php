<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    //index action
    public function index() {
        return view('accounts.index');
    }

    //store action
    public function store(Request $request)
    {
        $user = Auth::user();

        if ($request->type === 'Bank') {
            $validated = $request->validate([
                'type'=> 'required|string|max:255',
                'account_type'=> 'required|string|max:255',
                'account_name' => 'required|string|max:255',
                'account_number' => 'required|string|max:50', // FIX
                'bank_country' => 'required|string|max:255',
                'bank_currency' => 'required|string|max:255',
                'bank_name' => 'required|string|max:255',
                'branch_name' => 'required|string|max:255',
                'sort_code' => 'required|string|max:255',
                'routing_number' => 'required|string|max:50', // FIX
                'swift_code' => 'required|string|max:255',
                'iban_number' => 'required|string|max:50', // FIX
                'label_of_account'=> [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('accounts', 'label_of_account')->where(function ($query) use ($request) {
                        return $query->where('user_id', Auth::user()->id);
                    }),
                ],
            ]);
        } else {
            // Crypto
            $validated = $request->validate([
                'type'=> 'required|string|max:255',
                'wallet_chain'=> 'required|string|max:255',
                'wallet_address'=> 'required|string|max:255',
                'label_of_account'=> [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('accounts', 'label_of_account')->where(function ($query) use ($request) {
                        return $query->where('user_id', Auth::user()->id);
                    }),
                ],
            ]);
        }

        // Save account
        Account::create(array_merge(
            $validated,
            ['user_id' => $user->id]
        ));

        return redirect()->route('accounts.index')->with('success','Account Created Successfully');
    }

}
