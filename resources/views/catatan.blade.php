@extends('layouts.app')

@section('title-page', 'Catatan')

@section('current-navbar-active')
<ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link cnavbar-text active" href="{{ route('agenda') }}">Agenda</a>
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

    <button class="btn w-100 py-2 panel-action" data-bs-toggle="modal" data-bs-target="#modalTambahCatatan" style="background-color: #1E3A8A; color: white;">
        Post Materi
    </button>

</div>

        <!-- CENTER -->
        <div class="col-md-6 center-panel">

            <!-- <div class="content-item">
                <div class="post-header">
                    <span class="post-label label-materi">Materi</span>
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h6 class="post-title">Pengantar Basis Data</h6>
                <p class="post-content">
                    Lorem ipsum dolor sit amet...
                </p>
            </div> -->

            <!-- <div class="content-item">
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
            </div> -->

            <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>
            
                        <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>

                        <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>

                        <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>

                        <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>

                        <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>

                        <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="post-author">Azka Zafran</span>
                    <span class="post-time">• 21:52 · 10 Jan 2026</span>
                </div>

                <h5 class="post-title">Pengantar Basis Data</h5>
                <p class="mb-0">Lorem ipsum dolor sit amet...</p>

            </div>

                        <div class="content-item mb-4 pb-3 border-bottom">

                <div class="post-meta mb-2">
                    <span class="post-author">Azka Zafran</span>
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


<div class="modal fade" id="modalTambahCatatan" tabindex="-1" aria-labelledby="modalTambahCatatanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('make-agenda') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title primary" id="modalTambahCatatanLabel">Form Tambah Catatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="namaJudulCatatan" class="form-label secondary text2">Nama Judul (blom diganti)</label>
                        <input type="text" class="form-control" id="namaJudulCatatan" placeholder="judul catatan" name="judul_catatan">
                    </div>

                     <div class="mb-3">
                        <label for="isiCatatan" class="form-label secondary text2">Isi Catatan</label>
                        <textarea name="isi_catatan" class="form-control" id="catatan" cols="30" rows="10" placeholder="silahkan mengisi isi catatan"></textarea>
                        <input type="text" name="id_agenda" id="isiCatatan" hidden>
                    </div>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <button type="submit" class="btn btn-send" style="background-color: #1E3A8A; color: white;" ><i class="bi bi-send-fill me-2"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>