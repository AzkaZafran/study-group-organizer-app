@extends('layouts.app')

@section('title-page', 'Agenda')

@section('current-navbar-active')
    <ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link cnavbar-text active" aria-current="page" href="{{ route('agenda') }}">Agenda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link cnavbar-text" href="{{ route('friend-list') }}">Teman</a>
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
            @foreach ($list_agenda as $agenda)
                <div class="col d-flex">
                    <div class="card w-100 shadow">
                        <button type="button" class="btn text-start w-100 h-100"
                            data-bs-toggle="modal" data-bs-target={{ '#modaldetailagenda'.$agenda['ID_agenda'] }}>
                            <div class="card-body d-flex flex-column w-100 h-100">
                                <h5 class="card-title primary text1">{{ $agenda->nama_agenda }}</h5>
                                <div class="row mb-1">
                                    <div class="card-text text2 col-3">Tempat</div>
                                    <div class="card-text text2 col-1">:</div>
                                    <div class="card-text text3 col-8">{{ $agenda->lokasi }}</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="card-text text2 col-3">Waktu</div>
                                    <div class="card-text text2 col-1">:</div>
                                    <div class="card-text text3 col-8 ">{{ $agenda->waktu->format('l, d F Y') }}</div>
                                </div>
                                <div class="row mb-1">
                                    <div class="card-text text2 col-3">Jam</div>
                                    <div class="card-text text2 col-1">:</div>
                                    <div class="card-text text3 col-8">{{ $agenda->waktu->format('H:i') . " WIB" }}</div>
                                </div>
                                
                                <div class="row mb-1">
                                    <div class="card-text text2 col-3">Status</div>
                                    <div class="card-text text2 col-1">:</div>
                                    <div class="card-text text3 col-8">{{ $agenda->status }}</div>
                                </div>
                                
                                <div class="row">
                                    <div class="card-text text2 col-3">Partisipan</div>
                                    <div class="card-text text2 col-1">:</div>
                                </div>
                                
                                <div class="row flex-grow-1 mt-2 mb-2"> 
                                    <div class="col-12">
                                        <div class="card-text text3">
                                            @foreach ($agenda->users as $partisipan)
                                                <span class="bordertext">{{ $partisipan->name }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="card-text text4 text-center mt-auto" >Klik untuk detail</p>
                            </div>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

<div wire:ignore.self class="modal fade" id="modalTambahAgenda" tabindex="-1" aria-labelledby="modalTambahAgendaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('make-agenda') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title primary" id="modalTambahAgendaLabel">Form Tambah Agenda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label secondary text2">Penyelenggara : {{ auth()->user()->name }}</label>
                    </div>
                    
                    <div class="mb-3">
                        <label for="namaAgenda" class="form-label secondary text2">Nama Agenda</label>
                        <input type="text" class="form-control" id="namaAgenda" placeholder="name agenda" name="agenda_name">
                    </div>

                    <div class="row mb-3 gx-2">
                        <div class="col-md-5">
                            <label for="tempatAgenda" class="form-label secondary text2">Tempat</label>
                            <input type="text" class="form-control" id="tempatAgenda" placeholder="name place" name="agenda_place">
                        </div>
                        <div class="col-md-4">
                            <label for="waktuAgenda" class="form-label secondary text2">Waktu</label>
                            <input type="date" class="form-control" id="waktuAgenda" placeholder="d/M/y" name="agenda_date">
                        </div>
                        <div class="col-md-3">
                            <label for="jamAgenda" class="form-label secondary text2">Jam</label>
                            <input type="time" class="form-control" id="jamAgenda" placeholder="-- : --" name="agenda_time">
                        </div>
                    </div>
                    
                    @livewire('agenda-invite-partisipan')
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <button type="submit" class="btn " style="background-color: #1E3A8A; color: white;">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach ($list_agenda as $agenda)
    <div class="modal fade" id={{ 'modaldetailagenda'.$agenda['ID_agenda'] }} tabindex="-1" aria-labelledby="modalDetailAgendaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetailAgendaLabel">Detail: {{ $agenda->nama_agenda }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Penyelenggara:<strong> {{ $agenda->penyelenggara->name }} </strong></p>
                    <p>Tempat:<strong> {{ $agenda->lokasi }}</strong></p>
                    <p>Waktu:<strong> {{ $agenda->waktu->format('l, d F Y H:i') . " WIB" }}</strong></p>
                    <p>Status:<strong> {{ $agenda->status}}</strong></p>
                    <p>Partisipan:</p>
                    <div class="text3">
                        @foreach ($agenda->users as $partisipan)
                            <span class="bordertext">{{ $partisipan->name }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('catatan-agenda', $agenda->ID_agenda) }}">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background:#1d1d1d; color:white;">
                            Ke Catatan
                        </button>
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

