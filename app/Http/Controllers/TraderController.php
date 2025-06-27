<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraderController extends Controller
{
    //overview action
    public function overview() {
        return view('trader.overview');
    }
}
