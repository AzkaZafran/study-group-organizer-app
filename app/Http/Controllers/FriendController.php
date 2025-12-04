<?php

namespace App\Http\Controllers;

use App\Models\DaftarPermintaanTeman;
use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function friendList(Request $request){
        $friend_list = collect();
        if(auth()->check()){
            $friend_list = auth()->user()->userFriendList()->get();
        }
        // return view("friend-list",["friend_list"=> $friend_list]);
        return response()->json($friend_list);
    }

    public function friendRequest(Request $request){
        $permintaan_teman = collect();
        if(auth()->check()){
            $permintaan_teman = auth()->user()->pendingRequest()->get();
        }
        // return view("friend-request", ["permintaan_teman" => $permintaan_teman]);
        return response()->json($permintaan_teman);
    }

    public function acceptFriend(int $id){
        $matched = DaftarPermintaanTeman::where('idpeminta', $id)
                                          ->where('idtarget', auth()->id())
                                          ->where('status', 2)
                                          ->first();
        if(empty($matched)){
            return 'permintaan tidak dapat ditemukan';
        }

        $update_query = [
            'idpeminta' => $id,
            'idtarget' => auth()->id(),
            'status' => 1
        ];
        $matched->update($update_query);
        $receiver_request_query = [
            'idpeminta' => auth()->id(),
            'idtarget' => $id,
            'status' => 1
        ];
        $add_result = DaftarPermintaanTeman::create($receiver_request_query);

        // return redirect()->route('friend-request');
        return response()->json([$matched, $add_result]);
    }

    public function rejectFriend(int $id){
        $matched = DaftarPermintaanTeman::where('idpeminta', $id)
                                          ->where('idtarget', auth()->id())
                                          ->where('status', 2)
                                          ->first();
        if(empty($matched)){
            return 'permintaan tidak dapat ditemukan';
        }

        $matched->delete();

        // return redirect()->route('friend-request');
        return response()->json(['message' => 'permintaan ditolak']);
    }

    public function searchUserToAdd(Request $request){
        $input = $request->validate([
            'search_username' => 'string'
        ]);

        $query_result = User::where('name', $input['search_username'])->get();
        if($query_result->isEmpty()){
            // return redirect()->route('add-friend')
            //                  ->with('search_result', '');
            return response()->json();
        }

        $incoming_friend_requests = auth()->user()->incomingFriendRequestFrom($input['search_username'])->get();
        if($incoming_friend_requests->isNotEmpty()){
            $query_result = $query_result->reject(function($user) use($incoming_friend_requests){
                $matched = $incoming_friend_requests->firstWhere('id', $user->id);
                return !empty($matched);
            });
        }

        if($query_result->isEmpty()){
            // return redirect()->route('add-friend')
            //                  ->with('search_result', '');
            return response()->json();
        }

        $friend_status = auth()->user()->friendRequestByUsername($input['search_username'])->get();

        $friend_status_map = [
            1 => 'mutual',
            2 => 'pending approval'
        ];

        $query_result->map(function($user) use($friend_status, $friend_status_map){
            $matched = $friend_status->firstWhere('id', $user->id);
            if($matched){
                $user->status_teman = $friend_status_map[(int) $matched->pivot->status];
                return $user;
            }
            $user->status_teman = "none";
            return $user;
        });

        // return redirect()->route('add-friend')
        //                  ->with('search_result', $query_result);
        return response()->json($query_result);
    }

    public function sendRequest(User $user){
        $query_input = [
            'idpeminta' => auth()->id(),
            'idtarget' => $user->id,
            'status' => 2
        ];

        $send_result = DaftarPermintaanTeman::create($query_input);

        // return redirect()->route('add-friend');
        return response()->json($send_result);
    }
}
