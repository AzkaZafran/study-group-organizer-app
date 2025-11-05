<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $default_user = [
            'name' => 'Teguh Ryan',
            'password'=> 'admin123'
        ];

        if(auth()->guard()->attempt($default_user)){
            return view('dashboard');
        } else{
            return $this->register_dummy();
        }
    }

    private function register_dummy(){
        $create_dummy = [
            'name' => 'Teguh Ryan',
            'email' => 'teguhryan@dummyemail.com',
            'password' => bcrypt('admin123')
        ];

        $user = User::create($create_dummy);
        auth()->guard()->login($user);
        return view('dashboard');
    }
}
