@extends('layouts.app')

@section('current-navbar-active')
    <ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link cnavbar-text active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnavbar-text" href="/friend">Teman</a>
        </li>
    </ul>
@endsection

@section('title', 'Agenda')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 gx-3 gy-3">
            <div class="col d-flex">
                <div class="card w-100 shadow">
                    <button type="button" class="btn text-start w-100 h-100" data-bs-toggle="modal" data-bs-target="#modalTambahAgenda">
                        <div class="card-body d-flex flex-column w-100 h-100">
                            <h5 class="card-title primary text1 text-center">Tambah Agenda</h5>
                            <div class="card-text primary text-center " style="font-size:147px;">+</div>
                            <p class="card-text text4 text-center mt-auto">Klik untuk tambah</p>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card w-100 shadow">
                    <button type="button" class="btn text-start w-100 h-100"
                        data-bs-toggle="modal" data-bs-target="#modalDetailAgenda">
                        <div class="card-body d-flex flex-column w-100 h-100">
                            <h5 class="card-title primary text1">Belajar Laravel</h5>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Tempat</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8">Telkom University Surabaya</div>
                            </div>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Waktu</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8 ">Sabtu, 12 Oktober 2025</div>
                            </div>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Jam</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8">12.00</div>
                            </div>
                            
                            <div class="row">
                                <div class="card-text text2 col-3">Partisipan</div>
                                <div class="card-text text2 col-1">:</div>                                    
                            </div>
                            
                            <div class="row flex-grow-1 mt-2 mb-2"> 
                                <div class="col-12">
                                    <div class="card-text text3">
                                        <span class="bordertext">Teguh</span>
                                        <span class="bordertext">Ahmad</span>
                                        <span class="bordertext">Hafizhah</span>
                                        <span class="bordertext">Nabila</span>
                                        <span class="bordertext">Azka</span>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="card-text text4 text-center mt-auto" >Klik untuk detail</p>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card w-100 shadow">
                    <button type="button" class="btn text-start w-100 h-100"
                        data-bs-toggle="modal" data-bs-target="#modalDetailAgenda">
                        <div class="card-body d-flex flex-column w-100 h-100">
                            <h5 class="card-title primary text1">Belajar Laravel</h5>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Tempat</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8">Telkom University Surabaya</div>
                            </div>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Waktu</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8 ">Sabtu, 12 Oktober 2025</div>
                            </div>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Jam</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8">12.00</div>
                            </div>
                            
                            <div class="row">
                                <div class="card-text text2 col-3">Partisipan</div>
                                <div class="card-text text2 col-1">:</div>                                    
                            </div>
                            
                            <div class="row flex-grow-1 mt-2 mb-2"> 
                                <div class="col-12">
                                    <div class="card-text text3">
                                        <span class="bordertext">Teguh</span>
                                        <span class="bordertext">Ahmad</span>
                                        <span class="bordertext">Hafizhah</span>
                                        <span class="bordertext">Nabila</span>
                                        <span class="bordertext">Azka</span>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="card-text text4 text-center mt-auto" >Klik untuk detail</p>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card w-100 shadow">
                    <button type="button" class="btn text-start w-100 h-100"
                        data-bs-toggle="modal" data-bs-target="#modalDetailAgenda">
                        <div class="card-body d-flex flex-column w-100 h-100">
                            <h5 class="card-title primary text1">Belajar Laravel</h5>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Tempat</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8">Telkom University Surabaya</div>
                            </div>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Waktu</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8 ">Sabtu, 12 Oktober 2025</div>
                            </div>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Jam</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8">12.00</div>
                            </div>
                            
                            <div class="row">
                                <div class="card-text text2 col-3">Partisipan</div>
                                <div class="card-text text2 col-1">:</div>                                    
                            </div>
                            
                            <div class="row flex-grow-1 mt-2 mb-2"> 
                                <div class="col-12">
                                    <div class="card-text text3">
                                        <span class="bordertext">Teguh</span>
                                        <span class="bordertext">Ahmad</span>
                                        <span class="bordertext">Hafizhah</span>
                                        <span class="bordertext">Nabila</span>
                                        <span class="bordertext">Azka</span>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="card-text text4 text-center mt-auto" >Klik untuk detail</p>
                        </div>
                    </button>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card w-100 shadow">
                    <button type="button" class="btn text-start w-100 h-100"
                        data-bs-toggle="modal" data-bs-target="#modalDetailAgenda">
                        <div class="card-body d-flex flex-column w-100 h-100">
                            <h5 class="card-title primary text1">Belajar Laravel</h5>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Tempat</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8">Telkom University Surabaya</div>
                            </div>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Waktu</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8 ">Sabtu, 12 Oktober 2025</div>
                            </div>
                            <div class="row mb-1">
                                <div class="card-text text2 col-3">Jam</div>
                                <div class="card-text text2 col-1">:</div>
                                <div class="card-text text3 col-8">12.00</div>
                            </div>
                            
                            <div class="row">
                                <div class="card-text text2 col-3">Partisipan</div>
                                <div class="card-text text2 col-1">:</div>                                    
                            </div>
                            
                            <div class="row flex-grow-1 mt-2 mb-2"> 
                                <div class="col-12">
                                    <div class="card-text text3">
                                        <span class="bordertext">Teguh</span>
                                        <span class="bordertext">Ahmad</span>
                                        <span class="bordertext">Hafizhah</span>
                                        <span class="bordertext">Nabila</span>
                                        <span class="bordertext">Azka</span>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="card-text text4 text-center mt-auto" >Klik untuk detail</p>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection

<div class="modal fade" id="modalTambahAgenda" tabindex="-1" aria-labelledby="modalTambahAgendaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title primary" id="modalTambahAgendaLabel">Form Tambah Agenda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label secondary text2">Penyelenggara : Teguh</label>
                        </div>
                    
                    <div class="mb-3">
                        <label for="namaAgenda" class="form-label secondary text2">Nama Agenda</label>
                        <input type="text" class="form-control" id="namaAgenda" placeholder="name agenda">
                    </div>

                    <div class="row mb-3 gx-2">
                        <div class="col-md-5">
                            <label for="tempatAgenda" class="form-label secondary text2">Tempat</label>
                            <input type="text" class="form-control" id="tempatAgenda" placeholder="name place">
                        </div>
                        <div class="col-md-4">
                            <label for="waktuAgenda" class="form-label secondary text2">Waktu</label>
                            <input type="date" class="form-control" id="waktuAgenda" placeholder="d/M/y">
                        </div>
                        <div class="col-md-3">
                            <label for="jamAgenda" class="form-label secondary text2">Jam</label>
                            <input type="time" class="form-control" id="jamAgenda" placeholder="-- : --">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="partisipanAgenda" class="form-label secondary text2">Partisipan</label>
                        <input type="text" class="form-control" id="partisipanAgenda" placeholder="+ Klik untuk tambah partisipan">
                    </div>

                    <div class="mb-3">
                        <div class="span bordertext secondary text3">Teguh</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-center border-0">
                <button type="button" class="btn btn-primary" >Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDetailAgenda" tabindex="-1" aria-labelledby="modalDetailAgendaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailAgendaLabel">Detail: Belajar Laravel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Penyelenggara:<strong> Teguh </strong></p>
                <p>Tempat:<strong> Telkom University Surabaya</strong></p>
                <p>Waktu:<strong> Sabtu, 12 Oktober 2025 (12.00)</strong></p>
                <p>Partisipan:</p>
                <div class="text3">
                    <span class="bordertext">Teguh</span>
                    <span class="bordertext">Ahmad</span>
                    <span class="bordertext">Hafizhah</span>
                    <span class="bordertext">Nabila</span>
                    <span class="bordertext">Azka</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>