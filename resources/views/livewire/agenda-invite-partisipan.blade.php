<div>
    <div class="mb-3">
        <label for="partisipanAgenda" class="form-label secondary text2">Partisipan</label>
        <div>
            @foreach ($this->participants as $participant)
                <input type="text" name="agenda_participants_id[]" value="{{ $participant->id }}" hidden>
                <span class=" bordertext secondary text3" style="cursor: default;">
                    {{ $participant->name }}
                    <span wire:click="removeParticipant({{ $participant->id }})"
                          style="cursor: pointer;">
                        ✕
                    </span>
                </span>
            @endforeach
        </div>
        <input type="text" class="form-control" id="partisipanAgenda" wire:model="temp_input" placeholder="+ Klik untuk tambah partisipan">
        <div wire:click="searchFriendToInvite"
             style="border: 1px solid black; height: fit-content; width: fit-content;
             padding: 5px; background-color: grey; margin-top: 5px; cursor: pointer;">
            Search
        </div>
    </div>

    <div style="display: flex; flex-direction: row; align-items: center;">
        @foreach ($this->matching_users as $user)
            <div wire:click="addParticipant({{ $user->id }})"
                 style="margin: 5px 0px; background-color: cyan; height: fit-content;
                 padding: 5px 0px; cursor: pointer;">
                {{ $user->name }}
            </div>
        @endforeach
    </div>
</div>
