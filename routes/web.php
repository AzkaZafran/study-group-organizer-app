<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'login']);

// Route::get('/a', function () {
//     return view('drafts/dashboard');
// });

Route::get('/friend', function () {
    return view('friend-list');
});
