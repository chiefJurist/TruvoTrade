<?php

use App\Http\Controllers\HomepagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->controller(HomepagesController::class)->group(function(){
    Route::get('/about', 'about')->name('homepages.about');
    Route::get('/forex', 'forex')->name('homepages.forex');
    Route::get('/cryptos', 'cryptos')->name('homepages.cryptos');
    Route::get('/shares', 'shares')->name('homepages.shares');
    Route::get('/indices', 'indices')->name('homepages.indices');
    Route::get('/marijuana', 'marijuana')->name('homepages.marijuana');
    Route::get('/energies', 'energies')->name('homepages.energies');
    Route::get('/platform', 'platform')->name('homepages.platform');
    Route::get('/swaps', 'swaps')->name('homepages.swaps');
    Route::get('/copy-trading', 'copyTrading')->name('homepages.copy-trading');
    Route::get('/trading-specifications', 'tradingSpecifications')->name('homepages.trading-specifications');
    Route::get('/why-us', 'whyUs')->name('homepages.why-us');
    Route::get('contact-us', 'contactUs')->name('homepages.contact-us');
    Route::get('/privacy-policy', 'privacyPolicy')->name('homepages.privacy-policy');
    Route::get('/terms-of-service', 'termsOfService')->name('hompages.terms-of-service');
});
