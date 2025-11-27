<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\UserController;
use App\Models\Agenda;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'login']);

// Route::get('/a', function () {
//     return view('drafts/dashboard');
// });

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/r', function () {
//     return view('register');
// });

Route::get('/dashboard', function(){
    $list_agenda = [];
    if(auth()->check()){
        $list_agenda = Agenda::whereHas('konfirmasipartisipan', function($query) {
            $query->where('idpengguna', auth()->id());
        })->with('users')->get();
    }
    return view('dashboard', ['list_agenda' => $list_agenda]);
});

Route::get('/friend', function () {
    return view('friend-list');
});
