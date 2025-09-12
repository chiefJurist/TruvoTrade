<?php

namespace App\Http\Controllers;

use App\Models\Kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KycController extends Controller
{
    //index action
    public function index(){
        $kyc = Kyc::where('user_id', Auth::id())->where('status', 'approved')->get();
        return view('kyc.index', compact('kyc'));
    }

    //store action
    public function store(Request $request){
        $request->validate([
            'type'=> 'required|string',
            'document_front'=> 'required|image|mimes:jpeg,png,jpg|max:2048',
            'document_back'=> 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $frontPath = $request->file('document_front')->store('kyc_documents', 'public');
        $backPath = $request->file('document_back')->store('kyc_documents', 'public');

        Kyc::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'type' => $request->input('type'),
                'document_front' => $frontPath,
                'document_back' => $backPath,
                'status' => 'pending',
            ]
        );

        return redirect()->route('trader.security')->with('success', 'KYC submitted successfully and is under review.');
    }
}
