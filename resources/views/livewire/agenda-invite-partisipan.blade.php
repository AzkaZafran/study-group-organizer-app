<div>
    <div class="mb-3">
        <label for="partisipanAgenda" class="form-label secondary text2">Partisipan</label>
        <div>
            @foreach ($this->participants as $index => $participant)
                @php
                    $colors = ['#FFA500', '#32CD32', '#00FFFF', '#FFFF00', '#FFC0CB', '#FFE5B4', '#E6E6FA', '#AFEEEE'];
                    $randomColor = $colors[array_rand($colors)];
                    // Atau pakai index: $randomColor = $colors[$index % count($colors)];
                @endphp
                <span class="bordertext secondary text3" 
                    style="cursor: default; background-color: {{ $randomColor }}; border-color: {{ $randomColor }};">
                    {{ $participant->name }}
                    <span wire:click="removeParticipant({{ $participant->id }})"
                        style="cursor: pointer;">
                        ✕
                    </span>
                </span>
            @endforeach
        </div>
        
        <div class="row mb-3 g-2">
            <div class="col-md-9">
                <input type="text" class="form-control" id="partisipanAgenda" wire:model="temp_input" placeholder="+ Klik untuk tambah partisipan">
            </div>
            <div class="col-md-3">
                <button type="button" wire:click="searchFriendToInvite" class="btn btn-outline-secondary w-100">
                    Search
                </button>
            </div>
        </div>
    </div>

    <div>
        @foreach ($this->matching_users as $user)
            <span class="bordertext secondary text3" 
                  wire:click="addParticipant({{ $user->id }})"
                  style="cursor: pointer;">
                {{ $user->name }}
            </span>
        @endforeach
    </div>
</div>