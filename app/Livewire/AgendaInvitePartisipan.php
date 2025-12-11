<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Computed;
use Livewire\Component;

class AgendaInvitePartisipan extends Component
{
    public $temp_input;
    public $username_input;
    public $selected_friends_id;

    public function mount(){
        $this->selected_friends_id = [];
    }

    public function render()
    {
        return view('livewire.agenda-invite-partisipan');
    }

    public function searchFriendToInvite(){
        $this->username_input = $this->temp_input;
    }

    #[Computed]
    public function matching_users(){
        $matched = auth()->user()->userFriendList()
                     ->where('users.name', $this->username_input)
                     ->get();
        return $matched;
    }

    public function addParticipant($friend_id){
        if (!in_array($friend_id, $this->selected_friends_id)) {
            $this->selected_friends_id[] = $friend_id;
            $this->temp_input = '';
            $this->username_input = '';
        }
    }

    public function removeParticipant($participant_id){
        $participant_id_array = [$participant_id];

        $this->selected_friends_id = array_diff($this->selected_friends_id, $participant_id_array);
    }

    #[Computed]
    public function participants(){
        return User::whereIn('id', $this->selected_friends_id)->get();
    }
}
