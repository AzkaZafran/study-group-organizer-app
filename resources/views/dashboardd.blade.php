<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <style>
            .primary{
                color: #1E3A8A;
            }
            .secondary{
                color: #1F2937;
            }
            .text1{
                font-size: 24px;
            }
            .text2{
                font-size: 16px;
            }
            .text3{
                font-size: 16px;
                font-weight: bold;
            }
            .text4{
                font-size: 12px;
            }
            .bordertext{
                border-radius: 50rem; 
                border: 1px solid #1E3A8A; 
                display: inline-block;
                padding: 0.5rem;
                margin-right: 10px;
                margin-bottom: 8px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" >
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

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Agenda</h1>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 gx-3 gy-3">
                        <div class="col d-flex">
                            <div class="card w-100">
                                <button type="button" class="btn w-100 h-100">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center">                                         
                                        <h5 class="card-title primary text1 ">Tambah Agenda</h5>
                                        <p class="card-text primary flex-grow-1 d-flex justify-content-center" style="font-size: 150px">+</p>
                                        <p class="card-text text4" >Klik untuk tambah</p>
                                    </div>
                                </button>    
                            </div>
                        </div>

                        <div class="col d-flex">
                            <div class="card w-100">
                                <button type="button" class="btn text-start w-100 h-100">
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
                                        
                                        <div class="row mb-0">
                                            <div class="card-text text2 col-3">Partisipan</div>
                                            <div class="card-text text2 col-1">:</div>
                                            <div class="col-8"></div>                                         
                                        </div>
                                        
                                        <div class="row flex-grow-1 mt-2 mb-2"> 
                                            <div class="col-12">
                                                <div class="card-text text3">
                                                    <div class="span bordertext">Teguh</div>
                                                    <div class="span bordertext">Ahmad</div>
                                                    <div class="span bordertext">Hafizhah</div>
                                                    <div class="span bordertext">Nabila</div>
                                                    <div class="span bordertext">Azka</div>
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
                                <button type="button" class="btn text-start w-100 h-100">
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
                                        
                                        <div class="row mb-0">
                                            <div class="card-text text2 col-3">Partisipan</div>
                                            <div class="card-text text2 col-1">:</div>
                                            <div class="col-8"></div>                                         
                                        </div>
                                        
                                        <div class="row flex-grow-1 mt-2 mb-2"> 
                                            <div class="col-12">
                                                <div class="card-text text3">
                                                    <div class="span bordertext">Teguh</div>
                                                    <div class="span bordertext">Ahmad</div>
                                                    <div class="span bordertext">Hafizhah</div>
                                                    <div class="span bordertext">Nabila</div>
                                                    <div class="span bordertext">Azka</div>
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
                                <button type="button" class="btn text-start w-100 h-100">
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
                                        
                                        <div class="row mb-0">
                                            <div class="card-text text2 col-3">Partisipan</div>
                                            <div class="card-text text2 col-1">:</div>
                                            <div class="col-8"></div>                                         
                                        </div>
                                        
                                        <div class="row flex-grow-1 mt-2 mb-2"> 
                                            <div class="col-12">
                                                <div class="card-text text3">
                                                    <div class="span bordertext">Teguh</div>
                                                    <div class="span bordertext">Ahmad</div>
                                                    <div class="span bordertext">Hafizhah</div>
                                                    <div class="span bordertext">Nabila</div>
                                                    <div class="span bordertext">Azka</div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>