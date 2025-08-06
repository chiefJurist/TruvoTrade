<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\HomepagesController;
use App\Http\Controllers\TraderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WithdrawalController;
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

Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/login', 'showLogin')->name('show.login');
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/forgot-password', 'forgotPassword')->name('forgot-password');
    Route::post('register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
    Route::get('/verify-email/{token}','verifyEmail')->name('verify.email');
    Route::get('/verify-notice', 'verifyNotice')->name('verify.notice');
});

Route::middleware('auth')->controller(AuthController::class)->group(function(){
    Route::post('/logout','logout')->name('logout');
});

Route::middleware('auth')->controller(TraderController::class)->group(function() {
    Route::get('/overview', 'overview')->name('trader.overview');
    Route::get('/profile', 'profile')->name('trader.profile');
    Route::get('/investment', 'investment')->name('trader.investment');
    Route::get('/plans', 'plans')->name('trader.plans');
    Route::get('/referrals', 'referrals')->name('trader.referrals');
    Route::get('/kyc', 'kyc')->name('trader.kyc');
});

Route::middleware('auth')->controller(TransactionController::class)->group(function(){
    Route::get('/transactions', 'index')->name('transactions.index');
    Route::get('/transactions/create', 'create')->name('transactions.create');
    Route::get('/transactions/{transaction}', 'create')->name('transactions.show');
    Route::post('/transactions','store')->name('transactions.store');
    Route::delete('/transactions/{transaction}','destroy')->name('transactions.destroy');
});

Route::middleware('auth')->controller(WithdrawalController::class)->group(function(){
    Route::get('/withdrawals', 'index')->name('withdrawals.index');
    Route::get('/withdrawals/create', 'create')->name('withdrawals.create');
    Route::get('/withdrawals/{withdrawal}', 'create')->name('withdrawals.show');
    Route::post('/withdrawals','store')->name('withdrawals.store');
    Route::delete('/withdrawals/{withdrawal}','destroy')->name('withdrawals.destroy');
});

Route::middleware('auth')->controller(DepositController::class)->group(function(){
    Route::get('/deposits', 'index')->name('deposits.index');
    Route::get('/deposits/create', 'create')->name('deposits.create');
    Route::get('/deposits/{deposit}', 'create')->name('deposits.show');
    Route::post('/deposits','store')->name('deposits.store');
    Route::delete('/deposits/{deposit}','destroy')->name('deposits.destroy');
});