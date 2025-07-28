<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    //about action
    public function about() {
        return view('homepages.about');
    }

    //forex action
    public function forex()  {
        return view('homepages.forex');
    }

    //crypto action
    public function cryptos()  {
        return view('homepages.cryptos');
    }

    //shares action
    public function shares()  {
        return view('homepages.shares');
    }

    //indices action
    public function indices()  {
        return view('homepages.indices');
    }

    //marijuana action
    public function marijuana()  {
        return view('homepages.marijuana');
    }

    //energies action
    public function energies()  {
        return view('homepages.energies');
    }

    //platform action
    public function platform()  {
        return view('homepages.platform');
    }

    //swaps action
    public function swaps()  {
        return view('homepages.swaps');
    }

    //trading specifications action
    public function tradingSpecifications() {
        return view('homepages.trading-specifications');
    }

    //copytrading action
    public function copyTrading()  {
        return view('homepages.copy-trading');
    }

    //why us action
    public function whyUs() {
        return view('homepages.why-us');
    }

    //contact-us action
    public function contactUs()  {
        return view('homepages.contact-us');
    }
    
    //privacy policy action
    public function privacyPolicy() {
        return view('homepages.privacy-policy');
    }

    //terms of service action
    public function termsOfService() {
        return view('homepages.terms-of-service');
    }
}
