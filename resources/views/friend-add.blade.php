@extends('friend')

@section('title-page', 'Friend Add')

@section('content-friend')
    <ul class="nav nav-fill mb-5">
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" aria-current="page" href="{{ route('friend-list') }}">Daftar Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" href="{{ route('friend-request') }}">Permintaan Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text selected active" href="{{ route('add-friend') }}">Tambah Teman</a>
        </li>
    </ul>

    <form action="{{ route('search-user-to-add') }}" method="GET" class="mb-4">
        <div class="d-flex gap-2">
            <input
                type="text"
                name="search_username"
                class="form-control"
                placeholder="Cari nama teman..."
                style="height:44px; border-radius:8px;"
                required
            >
            <button class="btn"
                style="background:#1d1d1d; color:white; width:110px; border-radius:8px;">
                Cari
            </button>
        </div>
    </form>

    @if(session()->has('search_result') && session('search_result') != '')
        <ul class="list-unstyled">
            @foreach(session('search_result') as $user)
                <li class="borderlist mb-3 d-flex justify-content-between align-items-center p-3"
                    style="background:#e3e3e3; border-radius:8px;">

                    <span style="font-size:18px; color:#1d1d1d;">
                        {{ $user->name }}
                    </span>

                    {{-- STATUS / ACTION --}}
                    @if($user->status_teman === 'mutual')
                        <span class="badge bg-success px-3 py-2">
                            Sudah Teman
                        </span>

                    @elseif($user->status_teman === 'pending approval')
                        <span class="badge bg-secondary px-3 py-2">
                            Menunggu
                        </span>

                    @else
                        <form action="{{ route('requesting-friend', $user->id) }}" method="POST">
                            @csrf
                            <button class="btn"
                                style="background:#1e8b33; color:white; width:48px; height:38px; border-radius:6px;">
                                ✓
                            </button>
                        </form>
                    @endif

                </li>
            @endforeach
        </ul>
    @elseif(session()->has('search_result'))
        <div class="text-center text-muted">
            Pengguna tidak ditemukan.
        </div>
    @endif
@endsection