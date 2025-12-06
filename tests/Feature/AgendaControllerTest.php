<?php

namespace Tests\Feature;

use App\Models\Agenda;
use App\Models\DaftarPermintaanTeman;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AgendaControllerTest extends TestCase{
    use RefreshDatabase;

    public function testMakeAgendaAndShow(){
        $dummy_user = User::factory()->count(3)->create();

        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[0]->id,
            'idtarget' => $dummy_user[1]->id,
            'status' => 1
        ]);
        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[0]->id,
            'idtarget' => $dummy_user[2]->id,
            'status' => 1
        ]);
        
        $date_time = now();
        $date = $date_time->format('Y-m-d');
        $time = $date_time->format('H:i');

        $response = $this->actingAs($dummy_user[0])->followingRedirects()->post(route('make-agenda'), [
            'agenda_name' => 'dummy agenda',
            'agenda_place' => 'dummy_place',
            'agenda_date' => $date,
            'agenda_time' => $time,
            'agenda_participants_id' => [$dummy_user[1]->id, $dummy_user[2]->id]
        ]);

        $response->assertViewIs('dashboard');
        $response->assertViewHas('list_agenda', function($list_agenda){
            return $list_agenda->first()->nama_agenda === "dummy agenda";
        });
    }
}