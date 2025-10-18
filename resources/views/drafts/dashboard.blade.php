<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background-color: #F8FAFC">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand cnavbar-text" href="#">Teguh</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link cnavbar-text" href="/friend">Friends</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container ">
            <div class="row">
                <div class="col">
                    <h1>Agenda</h1>
                </div>
            </div>
            <div class="row">
                <div class="container shadow p-3 mb-5" style="background-color: #FFFFFF">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 gx-3 gy-3">
                        <div class="col d-flex">
                            <div class="card w-100">
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
                            <div class="card w-100">
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
                            <div class="card w-100">
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
                            <div class="card w-100">
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
                            <div class="card w-100">
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
            </div>
        </div>

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>