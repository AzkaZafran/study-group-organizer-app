<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/a', function () {
//     return view('drafts/dashboard');
// });

Route::get('/friend', function () {
    return view('friend-list');
});
