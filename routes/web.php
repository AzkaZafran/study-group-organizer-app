<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;
use App\Models\Agenda;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/verify-user', [UserController::class, 'login'])
       ->name('verify-user');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/register/input-otp', [VerificationController::class, 'sendOtpThenInput'])
       ->name('input-otp');

Route::post('/register/verify-otp', [VerificationController::class, 'verifyOtpThenRegister'])
       ->name('verify-otp');

Route::get('/dashboard', function(){
    $list_agenda = [];
    if(auth()->check()){
        $list_agenda = Agenda::whereHas('konfirmasipartisipan', function($query) {
            $query->where('idpengguna', auth()->id());
        })->with('users')->get();
    }
    return view('dashboard', ['list_agenda' => $list_agenda]);
})->name('dashboard');

Route::get('/friend', function () {
    return view('friend-list');
});

Route::get('/friend-request', function(){
    return view('friend-request');
})->name('friend-request');
