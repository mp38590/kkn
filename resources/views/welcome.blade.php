<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    
    <div class="container position-absolute z-index-sticky top-0" style="z-index: 9999; margin-left: 65px;">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white style="position: relative; z-index: 10000;"/>
            </div>
        </div>
    </div>
    <main class="main-content mt-0" style="background-color: #FFDEAD">
        <div class="col-md-10">
            <div class="position-relative w-100">
                <div class="oblique-image position-absolute fixed-top start-50 translate-middle-x z-index-0 bg-cover"
                    style="width: 1800px; height: 300px; margin-top: -100px; background-image:url('../assets/img/kantor_desa.jpg'); background-position: center;">
                </div>
                <div class="logo-container position-absolute fixed-top start-50 translate-middle-x" style="top: 10px; left: -120px;">
                    <img src="../assets/img/logo.jpg" alt="Logo" style="width: 100px; height: auto;">
                </div>
                <div class="col-xl-50 col-md-50 text-center" style="margin-left: 160px; color: #FFFFFF; margin-top: 100px; z-index: 10001; position: relative;">
                    <div class="custom-text">DESA NGIJO</div>
                    <div class="custom-text">KECAMATAN TASIKMADU</div>
                    <div class="custom-text">KABUPATEN KARANGANYAR</div>
                </div>
            </div>
            <section>
                <div class="page-header min-vh-100" style="margin-right: -100px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 col-md-10 text-center" style="margin-left: 160px; margin-top: -200px;">
                                <div class="custom-text2">DESA NGIJO</div>
                                <div class="custom-text3">Kegiatan di Balai Desa</div>
                            </div>

                            <!-- Carousel -->
                            <div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin-left: 180px; margin-right: -60px;">

                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> -->
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-around">
                                        <div class="col">
                                            <img src="../assets/img/1.jpg" alt="image 1" class="d-block" style="width: 350px; height: 220px;">
                                            <div class="carousel-caption">
                                                <div class="custom-text13" style="z-index: 1000; margin-left: -130px; margin-top: -100px;">Agro Wisata Sondokoro</div></br>
                                                <div class="custom-text14" style="z-index: 1000; margin-left: -90px; margin-top: -35px;">Kamis, 18 Juli 2024</div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <img src="../assets/img/2.jpg" alt="Image 2" class="d-block" style="width: 350px; height: 220px; margin-left: -70px;">
                                            <div class="carousel-caption"> 
                                                <div class="custom-text13" style="z-index: 1000; margin-left: 200px; margin-top: -100px;">Survei Posko di Dusun Pokoh</div>
                                                <div class="custom-text14" style="z-index: 1000; margin-left: 270px; margin-top: -10px;">Minggu, 16 Juni 2024</div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <img src="../assets/img/3.jpg" alt="Image 3" class="d-block" style="width: 350px; height: 220px; margin-left: -140px;">
                                            <div class="carousel-caption">
                                                <div class="custom-text13" style="z-index: 1000; margin-left: 570px; margin-right: -180px; margin-top: -100px;">Pemberian Topi KKN Undip </br> kepada Kepala Desa</div>
                                                <div class="custom-text14" style="z-index: 1000; margin-left: 640px; margin-right: -150px; margin-top: -15px;">Jumat, 12 Juli 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex justify-content-around">
                                        <div class="col">
                                            <img src="../assets/img/4.jpg" alt="image 4" class="d-block" style="width: 350px; height: 220px;">
                                            <div class="carousel-caption">
                                                <div class="custom-text13" style="z-index: 1000; margin-left: -175px; margin-top: -100px;">Penandatangan Proposal Program </br> Kerja Mahasiswa KKN</div></br>
                                                <div class="custom-text14" style="z-index: 1000; margin-left: -80px; margin-top: -35px;">Rabu, 17 Juli 2024</div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <img src="../assets/img/budikdamber.JPG" alt="image 5" class="d-block" style="width: 350px; height: 220px; margin-left: -70px;">
                                            <div class="carousel-caption">
                                                <div class="custom-text13" style="z-index: 1000; margin-left: 220px; margin-top: -100px;">Program Multi Budikdamber</div></br>
                                                <div class="custom-text14" style="z-index: 1000; margin-left: 290px; margin-top: -35px;">Jumat, 26 Juli 2024</div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <img src="../assets/img/aloevera2.JPG" alt="image 6" class="d-block" style="width: 350px; height: 220px; margin-left: -140px;">
                                            <div class="carousel-caption">
                                                <div class="custom-text13" style="z-index: 1000; margin-left: 590px; margin-top: -100px;">Program Multi Aloevera</div></br>
                                                <div class="custom-text14" style="z-index: 1000; margin-left: 640px; margin-top: -35px;">Jumat, 02 Agustus 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="carousel-item">
                                    <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
                                    <div class="carousel-caption">
                                        <h3>New York</h3>
                                        <p>We love the Big Apple!</p>
                                    </div>  
                                </div> -->
                            </div>
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" style="margin-left: 130px;">
                            <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <div class="position-relative">
                <div class="col-xl-50 col-md-50" style="margin-left: 40px; color: #FFFFFF; margin-top: -230px;">
                    <div class="custom-text4">BERANDA</div>
                    <div class="custom-text5" style="margin-left: 60px; margin-top: 20px;">Selamat Datang di Desa Ngijo, Kecamatan Tasikmadu, Kabupaten Karanganyar</div>
                        <div class="d-flex justify-content-around" style="margin-left: 100px;">
                            <div class="inner-box" style="width: 350px; height: 400px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono A2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('galeri_akbar') }}#monodisiplin1" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin Silvani </br> Ika Wulandari</a>
                                <div class="custom-text17" style="margin-top: 15px">Balai Desa Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Jumat, 26 Juli 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono A2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('galeri_akbar') }}#monodisiplin1" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin Silvani </br> Ika Wulandari</a>
                                <div class="custom-text17" style="margin-top: 15px">Balai Desa Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Selasa, 30 Juli 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/jasmine1.jpg" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('mono_jasmine_pertama') }}" class="custom-text15" style="text-decoration: none;">EDUKASI PENGEMASAN PANGAN DI </br> DESA NGIJO: KKN TIM II </br> UNIVERSITAS DIPONEGORO </br> MEMPERKENALKAN TEKNOLOGI </br> <em>VACUUM SEALING</em></a>
                                <div class="custom-text17" style="margin-top: 15px">Balai Desa Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Selasa, 30 Juli 2024</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 100px; margin-top: 50px;">
                            <div class="inner-box" style="width: 350px; height: 400px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono A2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('galeri_akbar') }}#monodisiplin1" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin </br> Muhammad Rizky Alfareza</a>
                                <div class="custom-text17" style="margin-top: 15px">Balai Desa Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Selasa, 30 Juli 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono A2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('galeri_akbar') }}#monodisiplin1" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin </br> Muhammad Rizky Alfareza</a>
                                <div class="custom-text17" style="margin-top: 15px">SD Negeri 2 Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Rabu, 31 Juli 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/jasmine2.jpg" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('mono_jasmine_kedua') }}" class="custom-text15" style="text-decoration: none;">DUKUNG UMKM DESA NGIJO, KKN </br> TIM II UNDIP MENCIPTAKAN </br> DIVERSIFIKASI PRODUK DARI </br> OLAHAN <em>ALOE VERA</em></a>
                                <div class="custom-text17" style="margin-top: 40px">Dapur Kanjeng Mami</div>
                                <div class="custom-text17" style="margin-top: -15px">Jumat, 02 Agustus 2024</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 100px; margin-top: 50px;">
                            <div class="inner-box" style="width: 350px; height: 400px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono A2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('galeri_akbar') }}#monodisiplin1" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin Akbar </br> Hidayah</a>
                                <div class="custom-text17" style="margin-top: 15px">Dapur Kanjeng Mami</div>
                                <div class="custom-text17" style="margin-top: -15px">Jumat, 02 Agustus 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono A2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('galeri_akbar') }}#monodisiplin1" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin Akbar </br> Hidayah</a>
                                <div class="custom-text17" style="margin-top: 15px">Dapur Kanjeng Mami</div>
                                <div class="custom-text17" style="margin-top: -15px">Jumat, 02 Agustus 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/jasmine2.jpg" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('mono_jasmine_kedua') }}" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin Putri </br> Devina Soraya</a>
                                <div class="custom-text17" style="margin-top: 15px">SD Negeri 2 Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Selasa, 06 Agustus 2024</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 100px; margin-top: 50px;">
                            <div class="inner-box" style="width: 350px; height: 400px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono A2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('galeri_akbar') }}#monodisiplin1" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin Putri </br> Devina Soraya</a>
                                <div class="custom-text17" style="margin-top: 15px">SD Negeri 1 Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Rabu, 07 Agustus 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono Y.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('mono_yuli_pertama') }}#monodisiplin1" class="custom-text15" style="text-decoration: none;">PUBLIKASI DATA KEPENDUDUKAN </br> DI WEBSITE DESA UNTUK </br> MENINGKATKAN AKSES INFORMASI</a>
                                <div class="custom-text17" style="margin-top: 65px">Balai Desa Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Kamis, 08 Agustus 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono Y2.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('mono_yuli_kedua') }}" class="custom-text15" style="text-decoration: none;">PEMBUATAN INFOGRAFIS </br> KEPENDUDUKAN DESA UNTUK </br> MENINGKATKAN KUALITAS DATA </br> DAN VISUALISASI DEMOGRAFI DI </br> DESA NGIJO</a>
                                <div class="custom-text17" style="margin-top: 15px">Balai Desa Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Kamis, 08 Agustus 2024</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 100px; margin-top: 50px;">
                            <div class="inner-box" style="width: 350px; height: 400px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono PR.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('mono_permata_pertama') }}" class="custom-text15" style="text-decoration: none;">APLIKASI BERBASIS MOBILE UNTUK </br> OTOMATISASI BUKTI TRANSAKSI </br> BAGI BUMDES</a>
                                <div class="custom-text17" style="margin-top: 60px">Balai Desa Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Kamis, 08 Agustus 2024</div>
                            </div>

                            <div class="inner-box" style="width: 350px; height: 400px; margin-left: 70px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <img src="../assets/img/mono PR2.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                                <a href="{{ route('mono_permata_kedua') }}" class="custom-text15" style="text-decoration: none;">APLIKASI WEBSITE BERBASIS </br> INFORMASI TERINTEGRASI UNTUK </br> DESA NGIJO DENGAN AKSES PENUH </br> BAGI PERANGKAT DESA</a>
                                <div class="custom-text17" style="margin-top: 37px">Balai Desa Ngijo</div>
                                <div class="custom-text17" style="margin-top: -15px">Kamis, 08 Agustus 2024</div>
                            </div>
                        </div>
                    <hr class="custom-line" style="margin-top: 15px;">
                    <div class="custom-text6" style="margin-left: 170px">Kegiatan Pemberian Topi dan Penandatanganan Proposal Program Kerja</div>
                    <hr class="custom-line">
                </div>
                <div class="position-absolute start-20 z-index-0 bg-cover"
                    style="width: 1300px; height: 600px; margin-top: 30px; margin-left: 80px; margin-right: 30px; background-image:url('../assets/img/3.png'); background-position: center;">
                </div>
                <div class="col-xl-50 col-md-50" style="margin-left: 40px; margin-top: 650px;">
                    <div class="custom-text7" style="margin-left: 40px">Kegiatan Pemberian Topi KKN Undip kepada Kepala Desa</div>
                    <div class="custom-text8" style="margin-left: 40px">oleh Admin</div>
                    <div class="custom-text8" style="margin-left: 40px">Jumat, 12 Juli 2024</div>
                    <div class="custom-text9" style="margin-left: 40px; margin-right: 30px;">Kegiatan pemberian topi KKN Undip kepada Kepala Desa Ngijo dilaksanakan pada tanggal 12 Juli 2024. Dalam kegiatan ini, mahasiswa KKN memberikan topi sebagai simbolik terima kasih kepada Kepala Desa atas dukungannya dalam pelaksanaan program KKN di Desa Ngijo.</div>
                </div>
                <div class="position-absolute start-20 z-index-0 bg-cover"
                    style="width: 1300px; height: 600px; margin-top: 30px; margin-left: 80px; margin-right: 30px; background-image:url('../assets/img/4.jpg'); background-position: center;">
                </div>
                <div class="col-xl-50 col-md-50" style="margin-left: 40px; margin-top: 650px;">
                    <div class="custom-text7" style="margin-left: 40px">Kegiatan Penandatangan Proposal Program Kerja dari Mahasiswa KKN Tim II UNDIP</div>
                    <div class="custom-text8" style="margin-left: 40px">oleh Admin</div>
                    <div class="custom-text8" style="margin-left: 40px">Rabu, 17 Juli 2024</div>
                    <h4 class="custom-text9" style="margin-left: 40px">NGIJO 17, Juli 2024 Mahasiswa KKN Undip meminta tanda tangan untuk pengesahan proposal program kerja yang telah dibuat kepada kepala desa</h4>
                </div>

                <div class="col-xl-50 col-md-50" style="margin-left: 40px; color: #FFFFFF; margin-top: 50px;">
                    <div class="custom-text4">GALERI</div>
                    <div class="d-flex justify-content-around" style="margin-left: 80px;">
                        <div class="d-block" style="margin-top: 30px; margin-left: 20px; margin-right: 30px;">
                            <img src="../assets/img/budikdamber.JPG" alt="image 1" style="width: 300px; height: 180px;">
                            <div>
                                <a href="{{ route('galeri') }}#multidisiplin" class="custom-text15" style="text-decoration: none;">Kegiatan Multidisiplin Budikdamber</a>
                                <div class="custom-text16" style="margin-top: 30px">Balai Desa Ngijo</div>
                                <div class="custom-text16" style="margin-top: -15px">Jumat, 26 Juli 2024</div>
                            </div>
                        </div>

                        <div class="d-block" style="margin-top: 30px; margin-left: 50px; margin-right: 30px; margin-bottom: 20px;">
                            <img src="../assets/img/mono SJ.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            <div>
                                <a href="{{ route('galeri') }}#monodisiplin" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin Silvani <br> Ika Wulandari dan Jasmine Effia <br> Zahira</a>
                                <div class="custom-text16" style="margin-top: 0px">Balai Desa Ngijo</div>
                                <div class="custom-text16" style="margin-top: -15px">Selasa, 30 Juli 2024</div>
                            </div>
                        </div>

                        <div class="d-block" style="margin-top: 30px; margin-left: 20px; margin-right: 30px;">
                            <img src="../assets/img/mono R.JPG" alt="image 3" style="width: 300px; height: 180px;">
                            <div>
                                <a href="{{ route('galeri_reza') }}" class="custom-text15" style="text-decoration: none;">Kegiatan Monodisiplin Muhammad <br> Rizky Alfareza</a>
                                <div class="custom-text16" style="margin-top: 30px">SD Negeri 02 Ngijo</div>
                                <div class="custom-text16" style="margin-top: -15px">Rabu, 31 Juli 2024</div>
                            </div>
                        </div>
                        <div class="d-block" style="margin-top: 180px; margin-left: 50px; margin-right: 30px;">
                            <a href="{{ route('galeri') }}#monodisiplin">
                                <img src="../assets/img/next.png" alt="btn" style="width: 80px; height: 80px;">
                            </a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-xl-50 col-md-50" style="margin-left: 40px; color: #FFFFFF; margin-top: 50px;">
                    <div class="custom-text4">INFOGRAFIS</div>
                    <div class="position-absolute z-index-0" style="width: 100%; height: auto; margin-top: 30px; margin-left: 80px; margin-right: 30px;">
                        <img src="../assets/img/infografis.png" alt="Infografis">
                    </div>
                </div>
            </div>
        </div>

        <div class="card" style="width: 1500px; height: 920px; margin-top: 2100px; background: linear-gradient(to right, #DC143C, #FFA07A); box-shadow: 0 5px 5px rgba(0, 0, 0, 0.25);">
            <div class="card-body pt-10 p-3">
                <div class="col-md-10">
                    <div class="position-relative w-100">
                        <div class="custom-text4 text-center" style="margin-left: 300px;">KONTAK KAMI</div>
                        <hr class="custom-line2">
                        <div class="custom-text3" style="margin-top: -10px; margin-left: 300px;">Kami akan melayani Anda dengan sepenuh hati</div>
                        <div style="display: flex; justify-content: left; align-items: center; gap: 100px; margin-top: 20px; margin-left: 280px;">
                            <div class="inner-box" style="width: 228px; height: 366px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                    <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/Phone.png'); background-position: center; background-size: cover;"></div>
                                </div>
                                <div class="custom-text10" style="text-align: center;">Telepon</div>
                                <div class="custom-text9" style="text-align: center;">0271 494805</div>
                            </div>
                            <div class="inner-box" style="width: 228px; height: 366px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                    <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/Message.png'); background-position: center; background-size: cover;"></div>
                                </div>
                                <div class="custom-text10" style="text-align: center;">Message</div>
                                <div class="custom-text9" style="text-align: center;">desa.ngijo.tasikmadu@gmail.com</div>
                            </div>
                            <div class="inner-box" style="width: 228px; height: 366px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                    <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/Facebook.png'); background-position: center; background-size: cover;"></div>
                                </div>
                                <div class="custom-text10" style="text-align: center;">Facebook</div>
                                <div class="custom-text9" style="text-align: center;">Pemerintah Desa Ngijo</div>
                            </div>
                        </div>
                        <div style="display: flex; justify-content: left; align-items: center; gap: 100px; margin-top: 20px; margin-left: 420px;">
                            <div class="inner-box" style="width: 228px; height: 366px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                    <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/Instagram.png'); background-position: center; background-size: cover;"></div>
                                </div>
                                <div class="custom-text10" style="text-align: center;">Instagram</div>
                                <div class="custom-text9" style="text-align: center;">@pemdesngijo</div>
                            </div>
                            <div class="inner-box" style="width: 228px; height: 366px; background-color: rgba(255, 255, 255, 1); padding: 20px; border-radius: 10px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 1); border-radius: 50%; margin: 0 auto 20px; border: 5px solid rgba(246, 103, 43, 0.62); position: relative;">
                                    <div class="position-absolute" style="width: 55px; height: 55px; margin-top: 16px; margin-left: 16px; background-image: url('../assets/img/Location.png'); background-position: center; background-size: cover;"></div>
                                </div>
                                <div class="custom-text10" style="text-align: center;">Alamat</div>
                                <div class="custom-text9" style="text-align: center;">Jl. Letjend Suprapto No. 01, Desa Ngijo, Karanganyar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-50 col-md-50" style="margin-left: 40px; color: #FFFFFF; margin-top: 50px;">
            <div class="custom-text4">KRITIK & SARAN</div>
                <div class="card" style="width: 1200px; height: 650px; background-color: #FFFFFF; padding: 20px; margin-top: 20px; border: 5px solid rgba(246, 103, 43, 0.62);">
                    <div class="card-body pt-1">
                        <div class="col-md-15">
                            <div class="position-relative w-100">
                            <form role="form" method="POST" action="{{ route('submit-kritik') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nama" class="form-control-label custom-text11">Nama</label>
                                    <div class="@error('nama')border border-danger rounded-3 @enderror">
                                        <input name="nama" class="form-control custom-text12" type="text" value="{{ old('nama') }}" placeholder="Masukkan nama Anda" id="nama">
                                    </div>
                                    @error('nama') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-control-label custom-text11">Alamat Email</label>
                                    <div class="@error('alamat_email')border border-danger rounded-3 @enderror">
                                        <input name="alamat_email" class="form-control custom-text12" type="email" value="{{ old('alamat_email') }}" placeholder="Masukkan alamat email Anda" id="email">
                                    </div>
                                    @error('alamat_email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kritik" class="form-control-label custom-text11">Kritik</label>
                                    <div class="@error('kritik')border border-danger rounded-3 @enderror">
                                        <input name="kritik" class="form-control custom-text12" value="{{ old('kritik') }}" style="height: 120px;" type="text" placeholder="Masukkan kritik yang ingin Anda berikan" id="kritik">
                                    </div>
                                    @error('kritik') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="saran" class="form-control-label custom-text11">Saran</label>
                                    <div class="@error('saran')border border-danger rounded-3 @enderror">
                                        <input name="saran" class="form-control custom-text12" value="{{ old('saran') }}" style="height: 120px;" type="text" placeholder="Masukkan saran yang ingin Anda berikan" id="saran">
                                    </div>
                                    @error('saran') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="card-footer" style="margin-top: 25px;">
                                    <button type="submit" class="btn btn-warning custom-text10">Kirim</button>
                                </div>
                            </form>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</x-app-layout>

<script>
    // Mengambil elemen carousel
    var carousel = document.querySelector('#demo');

    // Fungsi untuk menghentikan carousel
    function stopCarousel() {
        var carouselInstance = bootstrap.Carousel.getInstance(carousel);
        carouselInstance.pause();
    }

    // Menambahkan event listener pada tombol prev dan next
    document.querySelector('.carousel-control-prev').addEventListener('click', stopCarousel);
    document.querySelector('.carousel-control-next').addEventListener('click', stopCarousel);
</script>

<style>
    .custom-text {
        color: #FFFFFF;
        font-size: 30px;
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
        font-family: Cambria;
        text-align: center;
        margin: 10px 0;
    }

    .custom-text2 {
        color: #000000;
        font-size: 30px;
        font-weight: bold;
        text-shadow: 2px 2px 2px #000000;
        font-family: Cambria;
        text-align: center;
        margin: 10px 0;
    }

    .custom-text3 {
        color: #000000;
        font-size: 15px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: center;
        margin: 10px 0;
    }

    .custom-text4 {
        color: #000000;
        font-size: 40px;
        font-weight: bold;
        text-shadow: 2px 2px 2px #000000;
        font-family: Cambria;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text5 {
        color: #000000;
        font-size: 50px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: center;
        margin: 10px 0;
    }

    .custom-text6 {
        color: #000000;
        font-size: 30px;
        font-weight: bold;
        font-family: Cambria;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text7 {
        color: #000000;
        font-size: 25px;
        font-weight: bold;
        font-family: Lucida Bright;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text8 {
        color: hsl(0, 0%, 49%);
        font-size: 25px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text9 {
        color: #000000;
        font-size: 25px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text10 {
        color: #000000;
        font-size: 25px;
        font-weight: bold;
        font-family: Cambria;
        text-align: center;
        margin: 10px 0;
    }

    .custom-text11 {
        color: #000000;
        font-size: 20px;
        font-weight: bold;
        font-family: Perpetua;
        text-align: left;
    }

    .custom-text12 {
        color: #000000;
        font-size: 20px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: left;
    }

    .custom-text13 {
        color: #FFFFFF;
        font-size: 20px;
        font-weight: bold;
        font-family: Cambria;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text14 {
        color: #FFFFFF;
        font-size: 18px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text15 {
        color: #000000;
        font-size: 17px;
        font-weight: bold;
        font-family: Lucida Bright;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text16 {
        color: hsl(0, 0%, 49%);
        font-size: 20px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text17 {
        color: hsl(0, 0%, 49%);
        font-size: 15px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: left;
        margin: 10px 0;
    }

    .custom-line {
        width: 183px;
        height: 10px;
        background-color: #FF4D00;
        margin: 10px auto auto 550px;
    }

    .custom-line2 {
        width: 183px;
        height: 15px;
        background-color: #FF4D00;
        margin: 10px auto auto 670px;
    }
</style>