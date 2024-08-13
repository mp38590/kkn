<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .custom-text {
            color: #000000;
            font-size: 30px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
            font-family: Cambria;
            text-align: center;
        }

        .custom-text2 {
            color: #000000;
            font-size: 25px;
            font-weight: regular;
            font-family: Perpetua;
            text-align: left;
        }

        .custom-text3 {
            color: #000000;
            font-size: 25px;
            font-weight: bold;
            font-family: Cambria;
            text-align: left;
        }

        .custom-text4 {
            color: #000000;
            font-size: 20px;
            font-weight: bold;
            font-family: Cambria;
            text-align: left;
            margin: 5px 0;
        }

        .custom-text5 {
            color: #000000;
            font-size: 20px;
            font-weight: regular;
            font-family: Cambria;
            text-align: left;
            margin: 5px 0;
        }

        .custom-text6 {
            color: #000000;
            font-size: 30px;
            font-weight: bold;
            font-family: Cambria;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container position-absolute top-0" style="margin-left: 65px;">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white style="position: relative; z-index: 1000;" />
            </div>
        </div>
    </div>
    <main class="main-content mt-0" style="background-color: #FFDEAD">
        <div class="col-md-19">
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-15 col-md-15 text-center position-absolute" style="margin-left: 20px; margin-top: 100px;">
                            <div class="custom-text">DATA</div>
                            <div class="custom-text3" style="margin-left: -20px; margin-top: 35px;">Data Desa Ngijo</div>
                        </div>

                        <div class="container" style="margin-top: 250px;">
                            <!-- Carousel -->
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="margin-left: 50px;">
                                    <div class="d-flex justify-content-around">
                                        <div class="col">
                                            <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                                <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                    <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/pokoh.png'); background-position: center; background-size: cover;"></div>
                                                </div>
                                                <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 10px;" href="{{ route('data_ngijo_kulon') }}">Jumlah Penduduk Ngijo Kulon</a>
                                                <div class="custom-text5" style="text-align: center;">{{ $ngijoKulon }} Penduduk</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                                <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                    <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/pokoh.png'); background-position: center; background-size: cover;"></div>
                                                </div>
                                                <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 10px;" href="{{ route('data_ngijo_tengah') }}">Jumlah Penduduk Ngijo Tengah</a>
                                                <div class="custom-text5" style="text-align: center;">{{ $ngijoTengah }} Penduduk</div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                                <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                    <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/pokoh.png'); background-position: center; background-size: cover;"></div>
                                                </div>
                                                <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 10px;" href="{{ route('data_ngijo_wetan') }}">Jumlah Penduduk Ngijo Wetan</a>
                                                <div class="custom-text5" style="text-align: center;">{{ $ngijoWetan }} Penduduk</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="margin-left: 50px;">
                                <div class="d-flex justify-content-around" style="margin-top: 5px;">
                                    <div class="col">
                                        <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                            <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/pokoh.png'); background-position: center; background-size: cover;"></div>
                                            </div>
                                            <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 0px;" href="{{ route('data_nglano_wetan') }}">Jumlah Penduduk Nglano Wetan</a>
                                            <div class="custom-text5" style="text-align: center;">{{ $nglanoWetan }} Penduduk</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                            <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/pokoh.png'); background-position: center; background-size: cover;"></div>
                                            </div>
                                            <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 40px;" href="{{ route('data_pokoh') }}">Jumlah Penduduk Pokoh</a>
                                            <div class="custom-text5" style="text-align: center;">{{ $pokoh }} Penduduk</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                            <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/kawin.png'); background-position: center; background-size: cover;"></div>
                                            </div>
                                            <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 5px;" href="{{ route('data_belum_kawin') }}">Jumlah Penduduk Belum Kawin</a>
                                            <div class="custom-text5" style="text-align: center;">{{ $belumKawin }} Penduduk</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="margin-left: 50px;">
                            <div class="d-flex justify-content-around" style="margin-top: 5px;">
                                    <div class="col">
                                        <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                            <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/kawin.png'); background-position: center; background-size: cover;"></div>
                                            </div>
                                            <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 40px;" href="{{ route('data_kawin') }}">Jumlah Penduduk Kawin</a>
                                            <div class="custom-text5" style="text-align: center;">{{ $kawin }} Penduduk</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                            <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/work.png'); background-position: center; background-size: cover;"></div>
                                            </div>
                                            <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 10px;" href="{{ route('data_non_pelajar') }}">Jumlah Penduduk Non Pelajar</a>
                                            <div class="custom-text5" style="text-align: center;">{{ $nonPelajar }} Penduduk</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inner-box" style="width: 350px; height: 250px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                            <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                                <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/pelajar.png'); background-position: center; background-size: cover;"></div>
                                            </div>
                                            <a class="custom-text4" style="text-align: center; text-color: #000000; text-decoration: none; margin-left: 40px;" href="{{ route('data_pelajar') }}">Jumlah Penduduk Pelajar</a>
                                            <div class="custom-text5" style="text-align: center;">{{ $pelajar }} Penduduk</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            </button>
                            </div>
                        </div>

                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <form action="{{ url('data') }}" method="GET" class="d-flex" style="width: 100%; margin-top: 50px;">
                                <div class="input-group" style="width: 100%;">
                                    <span class="input-group-text text-body bg-white border-end-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control ps-0" name="search" placeholder="Search" value="{{ request()->query('search') }}">
                                </div>
                            </form>
                        </div>
                        @if($data->isEmpty())
                            <div class="container text-center my-5">
                                <div class="alert alert-warning" role="alert">
                                    Tidak ada data yang ditampilkan
                                </div>
                            </div>
                        @else
                            <!-- Table displaying data -->
                            <div class="table-responsive p-0" style="margin-top: 20px;">
                                <table class="table align-items-center mb-0" style="margin-left: 10px;">
                                    <thead>
                                        <tr>
                                            <th class="text-dark text-lg font-weight-semibold ps-3" style="text-align: center;">No.</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Nama</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Dusun</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Alamat</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">RT</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">RW</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Tempat Lahir</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Tanggal Lahir</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Jenis Kelamin</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Hubungan Keluarga</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Status Kawin</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Agama</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Pekerjaan</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Pendidikan</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Suku</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Tahun Lahir</th>
                                            <th class="text-dark text-lg font-weight-semibold ps-1" style="text-align: center;">Generasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $index = 1 @endphp
                                        @foreach($data as $dataa)
                                        <tr>
                                            <th class="font-weight-normal text-xl text-dark ps-3">{{ $index++ }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1 me-4">{{ $dataa->nama }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->dusun }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->alamat }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->rt }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1 text-center">{{ $dataa->rw }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1 text-center">{{ $dataa->tempat_lahir }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-2 pe-2" style="text-align: justify;">{{ $dataa->tanggal_lahir }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1 text-center">{{ $dataa->jenis_kelamin }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->hubungan_keluarga }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->status_kawin }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->agama }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->pekerjaan }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->pendidikan }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->suku }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->tahun_lahir }}</th>
                                            <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->generasi }}</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
</x-app-layout>