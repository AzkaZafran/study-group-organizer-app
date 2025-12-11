@extends('friend')

@section('content-friend')
    <ul class="nav nav-fill mb-3">
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link cnav-text selected active" aria-current="page" href="{{ route('friend-list') }}">Daftar Teman</a>
        </li>
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link cnav-text unselected" href="{{ route('friend-request') }}">Permintaan Teman</a>
        </li>
        <li class="nav-item d-flex align-items-center">
            <a class="nav-link cnav-text unselected" href="{{ route('add-friend') }}">Tambah Teman</a>
        </li>
    </ul>
    <div>
        <ul class="list-unstyled"> 
            <li class="borderlist mb-3">
                Asep
            </li>
            <li class="borderlist mb-3">
                Budi
            </li>

            <li class="borderlist mb-3">
                Citra
            </li>
        </ul>
    </div>
@endsection