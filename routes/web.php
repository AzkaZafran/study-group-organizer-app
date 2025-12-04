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

Route::get('/friend', [FriendController::class, 'friendList'])
       ->name('friend');

Route::get('/friend/list', [FriendController::class, 'friendList'])
       ->name('friend-list');

Route::get('/friend/requests', [FriendController::class, 'friendRequest'])
       ->name('friend-request');

Route::put('/friend/requests/{id}/accept', [FriendController::class, 'acceptFriend'])
       ->name('accept-friend');

Route::delete('/friend/requests/{id}/reject', [FriendController::class, 'rejectFriend'])
       ->name('reject-friend');

Route::get('/friend/add', function(){
    return view('friend-add');
})->name('add-friend');

Route::get('/friend/add/search-friend', [FriendController::class, 'searchUserToAdd'])
       ->name('search-user-to-add');

Route::post('/friend/add/{user}', [FriendController::class, 'sendRequest'])
       ->name('requesting-friend');
