@extends('layouts.app')

@section('current-navbar-active')
    <ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link cnavbar-text" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnavbar-text active" aria-current="page" href="#">Teman</a>
        </li>
    </ul>
@endsection

@section('title', 'Teman')

@section('content')
    <div class="container">
        <div class="row gx-3 gy-3">
            <div class="col d-flex">
                <div class="card w-100 shadow p-3 mb-5">
                    @yield('content-friend')
                </div>
            </div>
        </div>
    </div>
@endsection