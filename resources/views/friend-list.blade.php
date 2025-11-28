@extends('friend')

@section('content-friend')
    <ul class="nav nav-fill mb-5">
        <li class="nav-item">
            <a class="nav-link cnav-text selected active" aria-current="page" href="#">Daftar Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" href="{{ route('friend-request') }}">Permintaan Teman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnav-text unselected" href="#">Tambah Teman</a>
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