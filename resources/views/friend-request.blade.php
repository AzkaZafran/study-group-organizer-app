@extends('friend')

@section('title-page', 'Friend Request')

@section('content-friend')
    <ul class="nav nav-fill mb-5">
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" aria-current="page" href="{{ route('friend-list') }}">Daftar Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text selected active" href="{{ route('friend-request') }}">Permintaan Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" href="{{ route('add-friend') }}">Tambah Teman</a>
        </li>
    </ul>
    <div>
    <ul class="list-unstyled"> 
        @foreach($permintaan_teman as $req)
        <li class="borderlist mb-3 d-flex justify-content-between align-items-center p-3"
            style="background:#e3e3e3; border-radius:8px;">

            <span style="font-size:18px; color:#1d1d1d;">
                {{ $req->name }}
            </span>

            <div class="d-flex gap-2">

                <!-- {{-- Tombol Reject (Merah, Icon X) --}} -->
                <form action="{{ route('reject-friend', ['id' => $req->id]) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn"
                        style="background:#8b1e1e; color:white; width:48px; height:38px; border-radius:6px;">
                        ✕
                    </button>
                </form>

                <!-- {{-- Tombol Accept (Hijau, Icon ✓) --}} -->
                <form action="{{ route('accept-friend', ['id' => $req->id]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <button class="btn"
                        style="background:#1e8b33; color:white; width:48px; height:38px; border-radius:6px;">
                        ✓
                    </button>
                </form>

            </div>

        </li>
        @endforeach

    </ul>
</div>
@endsection