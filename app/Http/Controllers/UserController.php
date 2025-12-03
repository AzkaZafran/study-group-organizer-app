<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logout(Request $request){
        auth()->guard()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $input = $request->validate([
            'login-email'=> ['required', 'email'],
            'login-password' => 'required'
        ]);

        $query_input = [
            'email'=> $input['login-email'],
            'password' => $input['login-password']
        ];

        if(auth()->guard()->attempt($query_input)){
            $request->session()->regenerate();
        }

        return redirect()->route('dashboard');
    }
}
