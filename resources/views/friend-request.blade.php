@extends('friend')

@section('content-friend')
    <ul class="nav nav-fill mb-5">
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" href="{{ route('friend-list') }}">Daftar Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text selected active" aria-current="page" href="{{ route('friend-request') }}">Permintaan Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" href="{{ route('add-friend') }}">Tambah Teman</a>
        </li>
    </ul>
@endsection