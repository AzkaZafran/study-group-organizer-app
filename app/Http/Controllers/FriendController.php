<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function friend_list(Request $request){
        $friend_list = [];
        if(auth()->check()){
            $friend_list = auth()->user()->userFriendList();
        }
        return view("friend",["friend_list"=> $friend_list]);
    }
}
