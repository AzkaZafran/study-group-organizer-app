@extends('layouts.app')

@section('current-navbar-active')
<ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link cnavbar-text active" href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link cnavbar-text" href="{{ route('friend-list') }}">Teman</a>
    </li>
</ul>
@endsection


@section('full-layout')
<div class="container-fluid main-layout">
    <div class="row h-100">

        <!-- LEFT -->
<div class="col-md-3 left-panel">

    <h3 class="panel-title">Catatan</h3>

    <ul class="panel-content list-unstyled">
       <li class="panel-item active ">
            <a href="#" class="panel-link">
                Pengantar Basis Data
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                Normalisasi
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                ER Diagram
            </a>
        </li>
               <li class="panel-item">
            <a href="#" class="panel-link">
                Pengantar Basis Data
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                Normalisasi
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                ER Diagram
            </a>
        </li>
               <li class="panel-item">
            <a href="#" class="panel-link">
                Pengantar Basis Data
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                Normalisasi
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                ER Diagram
            </a>
        </li>
               <li class="panel-item">
            <a href="#" class="panel-link">
                Pengantar Basis Data
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                Normalisasi
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                ER Diagram
            </a>
        </li>
               <li class="panel-item">
            <a href="#" class="panel-link">
                Pengantar Basis Data
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                Normalisasi
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                ER Diagram
            </a>
        </li>
               <li class="panel-item">
            <a href="#" class="panel-link">
                Pengantar Basis Data
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                Normalisasi
            </a>
        </li>

        <li class="panel-item">
            <a href="#" class="panel-link">
                ER Diagram
            </a>
        </li>
    </ul>

    <button class="btn btn-success w-100 py-2 panel-action">
        Post Materi
    </button>

</div>

        <!-- CENTER -->
        <div class="col-md-6 center-panel">

            <div class="content-item">
                <div class="post-header">
                    <span class="post-label label-materi">Materi</span>
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h6 class="post-title">Pengantar Basis Data</h6>
                <p class="post-content">
                    Lorem ipsum dolor sit amet...
                </p>
            </div>

            <div class="content-item">
                <div class="post-header">
                    <span class="post-label label-diskusi">Diskusi</span>
                    <span class="post-author">Anonymous</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h6 class="post-title">Kenapa normalisasi penting?</h6>

                <div class="media-box">
                    VIDEO / GAMBAR
                </div>

                <p class="post-content">
                    Lorem ipsum dolor sit amet...
                </p>
            </div>

            <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="label label-materi">Materi</span>
                    <span class="post-author">Anonymous</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>
                        <div class="content-item">
                <div class="post-header">
                    <span class="post-label label-diskusi">Diskusi</span>
                    <span class="post-author">Anonymous</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h6 class="post-title">Kenapa normalisasi penting?</h6>

                <div class="media-box">
                    VIDEO / GAMBAR
                </div>

                <p class="post-content">
                    Lorem ipsum dolor sit amet...
                </p>
            </div>

            <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="label label-materi">Materi</span>
                    <span class="post-author">Anonymous</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>

                        <div class="content-item">
                <div class="post-header">
                    <span class="post-label label-diskusi">Diskusi</span>
                    <span class="post-author">Anonymous</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h6 class="post-title">Kenapa normalisasi penting?</h6>

                <div class="media-box">
                    VIDEO / GAMBAR
                </div>

                <p class="post-content">
                    Lorem ipsum dolor sit amet...
                </p>
            </div>

            <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="label label-materi">Materi</span>
                    <span class="post-author">Anonymous</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>



        </div>

        <!-- RIGHT -->
<div class="col-md-3 right-panel p-4">

    <h5 class="mb-1">Penyelenggara</h5>
    <p class="mb-3 fw-semibold">Azka Zafran</p>

    <hr class="mb-3">

    <h5 class="mb-2">Peserta (5)</h5>

    <div class="dropdown-content d-block ps-2">
        <div class="mb-1">Azka Zafran</div>
        <div class="mb-1">Ahmad Pasha</div>
        <div class="mb-1">Teguh Ryan</div>
        <div class="mb-1">Ficha</div>
        <div class="mb-1">Nabila</div>
    </div>

    <hr class="my-3">

    <h5 class="mb-1">Status</h5>
    <p class="fw-semibold text-success">Aktif</p>

</div>



    </div>
</div>
@endsection

