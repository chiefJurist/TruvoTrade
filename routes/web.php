<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\HomepagesController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\TraderController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransferTokenController;
use App\Http\Controllers\WithdrawalController;
use App\Models\TransferToken;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/overview');
    }
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
    Route::post('/forgot-password', 'sendResetLink')->name('password.email');
    Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('/reset-password', 'resetPassword')->name('password.update');
    Route::post('register', 'register')->name('register');
    Route::post('login', 'login')->name('login');
    Route::get('/verify-email/{token}','verifyEmail')->name('verify.email');
    Route::get('/verify-notice', 'verifyNotice')->name('verify.notice');
});

Route::post('logout', action: [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->controller(TraderController::class)->group(function() {
    Route::get('/overview', 'overview')->name('trader.overview');
    Route::get('/profile', 'profile')->name('trader.profile');
    Route::get('/security', 'security')->name('trader.security');
    Route::get('/investment', 'investment')->name('trader.investment');
    Route::get('/plans', 'plans')->name('trader.plans');
    Route::get('/referrals', 'referrals')->name('trader.referrals');
    Route::post('/password', 'updatePassword')->name('trader.updatePassword');
});

Route::middleware('auth')->controller(TransactionController::class)->group(function(){
    Route::get('/transactions', 'index')->name('transactions.index');
    Route::get('/transactions/create', 'create')->name('transactions.create');
    Route::post('/transactions','store')->name('transactions.store');
    Route::get('/transactions/{transaction}', 'show')->name('transactions.show');
    Route::delete('/transactions/{transaction}','destroy')->name('transactions.destroy');
});

Route::middleware('auth')->controller(WithdrawalController::class)->group(function(){
    Route::get('/withdrawals', 'index')->name('withdrawals.index');
    Route::get('/withdrawals/create', 'create')->name('withdrawals.create');
    Route::post('/withdrawals','store')->name('withdrawals.store');
    Route::get('/withdrawals/{withdrawal}', 'show')->name('withdrawals.show');
    // Route::delete('/withdrawals/{withdrawal}','destroy')->name('withdrawals.destroy');
});

Route::middleware('auth')->controller(DepositController::class)->group(function(){
    Route::get('/deposits', 'index')->name('deposits.index');
    Route::get('/deposits/create', 'create')->name('deposits.create');
    Route::post('/deposits','store')->name('deposits.store');
    Route::get('/deposits/{deposit}', 'show')->name('deposits.show');
    Route::delete('/deposits/{deposit}','destroy')->name('deposits.destroy');
});

Route::middleware('auth')->controller(AccountController::class)->group(function () {
    Route::get('/accounts', 'index')->name('accounts.index');
    Route::post('/accounts','store')->name('accounts.store');
    Route::get('/accounts/{account}', 'show')->name('accounts.show');
    Route::post('/accounts/{account}','destroy')->name('accounts.destroy');
});

Route::middleware('auth')->controller(KycController::class)->group(function(){
    Route::get('/kyc','index')->name('kyc.index');
    Route::post('/kyc','store')->name('kyc.store');
});

Route::middleware('auth')->controller(TokenController::class)->group(function(){
    Route::get('/tokens/create','create')->name('tokens.create');
    Route::post('/tokens','store')->name('tokens.store');
    Route::get('/tokens/{token}','show')->name('tokens.show');
});

Route::middleware('auth')->controller(TransferTokenController::class)->group(function(){
    Route::get('/token-transfer/create','create')->name('tokens-transfer.create');
    Route::post('/token-transfer','store')->name('tokens-transfer.store');
});