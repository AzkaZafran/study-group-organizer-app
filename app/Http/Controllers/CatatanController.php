<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Catatan;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    public function makeCatatan(Request $request){
        $input = $request->validate([
            'isi_catatan' => ['required', 'string', 'max:1000'],
            'id_agenda' => ['required', 'integer']
        ]);

        $query_input = [
            'catatan' => $input['isi_catatan'],
            'idpengguna' => auth()->id(),
            'idagenda' => $input['id_agenda']
        ];

        Catatan::create($query_input);

        return back();
    }

    public function showAgendaCatatan(Agenda $agenda){
        $list_catatan = $agenda->listCatatan()->latest()->get();
        
        return view('catatan', ['list_catatan' => $list_catatan]);
    }

    public function updateCatatan(Request $request){
        $input = $request->validate([
            'author_id' => ['required', 'integer'],
            'catatan_id' => ['required'. 'integer'],
            'perubahan_catatan' => ['required', 'string'],
        ]);

        if($input['author_id'] !== (int) auth()->id()){
            return redirect()->route('agenda');
        }

        $selected_catatan = Catatan::find($input['catatan_id']);
        if(empty($selected_catatan)){
            return back();
        }

        $update_query = ['catatan' => $input['perubahan_catatan']];
        $selected_catatan->update($update_query);

        return back();
    }

    public function deleteCatatan(Catatan $catatan){
        if(auth()->id() !== (int) $catatan->idpengguna){
            return redirect()->route('agenda');
        }

        $catatan->delete();

        return back();
    }
}
