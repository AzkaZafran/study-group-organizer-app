<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\DaftarPermintaanTeman;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FriendControllerTest extends TestCase{
    use RefreshDatabase;

    public function testFriendList(){
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

        $response = $this->actingAs($dummy_user[0])->get(route('friend-list'));
        $response->assertStatus(200);
        $response->assertJsonFragments([
            ['id' => $dummy_user[1]->id],
            ['id' => $dummy_user[2]->id]
        ]);
    }

    public function testFriendRequest(){
        $dummy_user = User::factory()->count(3)->create();

        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[1]->id,
            'idtarget' => $dummy_user[0]->id,
            'status' => 2
        ]);
        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[2]->id,
            'idtarget' => $dummy_user[0]->id,
            'status' => 2
        ]);

        $response = $this->actingAs($dummy_user[0])->get(route('friend-request'));
        $response->assertStatus(200);
        $response->assertJsonFragments([
            ['id' => $dummy_user[1]->id],
            ['id' => $dummy_user[2]->id]
        ]);
    }

    public function testAcceptFriend(){
        $dummy_user = User::factory()->count(2)->create();

        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[1]->id,
            'idtarget' => $dummy_user[0]->id,
            'status' => 2
        ]);
        $response = $this->actingAs($dummy_user[0])->put(route('accept-friend', ['id' => $dummy_user[1]->id]));
        $response->assertStatus(200);
        $response->assertJsonFragments([
            ['idpeminta' => $dummy_user[1]->id, 'idtarget' => $dummy_user[0]->id, 'status' => 1],
            ['idpeminta' => $dummy_user[0]->id, 'idtarget' => $dummy_user[1]->id, 'status' => 1]
        ]);

        $actual_data = DaftarPermintaanTeman::where('idpeminta', $dummy_user[1]->id)
                                            ->where('idtarget', $dummy_user[0]->id)
                                            ->where('status', 1)
                                            ->get();
        $this->assertCount(1, $actual_data);
    }

    public function testRejectFriend(){
        $dummy_user = User::factory()->count(2)->create();

        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[1]->id,
            'idtarget' => $dummy_user[0]->id,
            'status' => 2
        ]);
        $response = $this->actingAs($dummy_user[0])->delete(route('reject-friend', ['id' => $dummy_user[1]->id]));
        $response->assertStatus(200);

        $actual_data = DaftarPermintaanTeman::all();

        $this->assertCount(0, $actual_data);
    }

    public function testSearchFriend(){
        $dummy_user = User::factory()->count(4)->create();
        $named_user = User::factory()->count(2)->create(['name' => 'joseph']);

        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[0]->id,
            'idtarget' => $dummy_user[1]->id,
            'status' => 1
        ]);
        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[0]->id,
            'idtarget' => $dummy_user[2]->id,
            'status' => 2
        ]);
        DaftarPermintaanTeman::create([
            'idpeminta' => $dummy_user[3]->id,
            'idtarget' => $dummy_user[0]->id,
            'status' => 2
        ]);

        $response = $this->actingAs($dummy_user[0])
                         ->get(route('search-user-to-add', ['search_username' => $dummy_user[1]->name]));
        $response->assertStatus(200);
        $response->assertJsonFragments([
            ['name' => $dummy_user[1]->name, 'status_teman' => 'mutual']
        ]);

        $response = $this->actingAs($dummy_user[0])
                         ->get(route('search-user-to-add', ['search_username' => $dummy_user[2]->name]));
        $response->assertStatus(200);
        $response->assertJsonFragments([
            ['name' => $dummy_user[2]->name, 'status_teman' => 'pending approval']
        ]);

        $response = $this->actingAs($dummy_user[0])
                         ->get(route('search-user-to-add', ['search_username' => $dummy_user[3]->name]));
        $response->assertStatus(200);
        $response->assertJsonCount(0);

        $response = $this->actingAs($dummy_user[0])
                         ->get(route('search-user-to-add', ['search_username' => $named_user[0]->name]));
        $response->assertStatus(200);
        $response->assertJsonCount(2);
    }

    public function testSendRequest(){
        $dummy_user = User::factory()->count(2)->create();

        $response = $this->actingAs($dummy_user[0])->post(route('requesting-friend', ['user' => $dummy_user[1]->id]));
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'idpeminta' => $dummy_user[0]->id, 'idtarget' => $dummy_user[1]->id, 'status' => 2
        ]);
        $actual_data = DaftarPermintaanTeman::all();
        $this->assertCount(1, $actual_data);
    }
}
