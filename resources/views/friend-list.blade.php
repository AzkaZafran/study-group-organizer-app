@extends('friend')

@section('title-page', 'Friend List')

@section('content-friend')
    <ul class="nav nav-fill mb-5">
        <li class="nav-item">
            <a class="nav-link cnav-text selected active" aria-current="page" href="{{ route('friend-list') }}">Daftar Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" href="{{ route('friend-request') }}">Permintaan Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" href="{{ route('add-friend') }}">Tambah Teman</a>
        </li>
    </ul>
    <div>
        <ul class="list-unstyled">
            @foreach ($friend_list as $friend)
                <li class="borderlist mb-3">
                    {{ $friend->name }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection