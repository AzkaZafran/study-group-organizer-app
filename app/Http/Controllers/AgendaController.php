<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\KonfirmasiPartisipan;
use App\Models\User;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function makeAgenda(Request $request){
        $input = $request->validate([
            'agenda_name' => ['required', 'max:40'],
            'agenda_place' => 'required',
            'agenda_date' => ['required', 'date'],
            'agenda_time' => ['required', 'date_format:H:i'],
            'agenda_participants_id.*' => 'required'
        ]);

        $agenda_query_input = [
            'nama_agenda' => $input['agenda_name'],
            'id_penyelenggara' => auth()->id(),
            'lokasi' => $input['agenda_place'],
            'waktu' => $input['agenda_date'] . ' ' . $input['agenda_time'],
            'status' => 0
        ];

        $agenda_res = Agenda::create($agenda_query_input);
        if(empty($agenda_res)){
            return back();
        }

        $input['agenda_participants_id.*'][] = auth()->id();
        foreach ($input['agenda_participants_id.*'] as $i => $partisipan_id) {
            $Konfirm_Part_query = [
                'idagenda' => $agenda_res->ID_agenda,
                'idpengguna' => $partisipan_id,
                'status' => 2
            ];
            KonfirmasiPartisipan::create($Konfirm_Part_query);
        }

        return back();
    }

    public function searchFriendToInvite($username){
        $query_result = auth()->user()->userFriendList()
                                      ->where('users.name', $username)
                                      ->get();
        return back()->with('friend_search_result', $query_result);
    }

    public function insertToInviteList(User $user, $friend_invite_list = collect()){
        
    }
}
