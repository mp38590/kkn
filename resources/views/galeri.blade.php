<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container position-absolute z-index-sticky top-0" style="z-index: 9999; margin-left: 65px;">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white style="position: relative; z-index: 10000;"/>
            </div>
        </div>
    </div>
    <main class="main-content mt-0" style="background-color: #FFDEAD">
        <div class="col-md-19">
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-15 col-md-15 text-center" style="margin-left: 20px; margin-top: 100px;">
                            <div class="custom-text">GALERI</div>
                            <div class="custom-text3" style="margin-left: -20px; margin-top: 35px;">Kegiatan KKN Tim II Mahasiswa Universitas Diponegoro</div>
                        </div>
                        <div class="position-absolute start-20 z-index-0 bg-cover"
                            style="width: 1300px; height: 600px; margin-top: 220px; margin-left: 10px; margin-right: 30px; background-image:url('../assets/img/3.png'); background-position: center;">
                        </div>
                        <div class="col-xl-50 col-md-50" style="margin-left: 40px; margin-top: 620px;">
                            <div class="custom-text4" style="margin-left: -40px">Kegiatan Pemberian Topi KKN Undip kepada Kepala Desa</div>
                            <div class="custom-text5" style="margin-left: -40px">Jumat, 12 Juli 2024</div>
                        </div>
                        <div class="position-absolute start-20 z-index-0 bg-cover"
                            style="width: 1300px; height: 600px; margin-top: 930px; margin-left: 10px; margin-right: 30px; background-image:url('../assets/img/4.jpg'); background-position: center;">
                        </div>
                        <div class="col-xl-50 col-md-50" style="margin-left: 40px; margin-top: 630px;">
                            <div class="custom-text4" style="margin-left: -40px">Kegiatan Penandatangan Proposal Program Kerja dari Mahasiswa KKN Tim II Universitas Diponegoro</div>
                            <div class="custom-text5" style="margin-left: -40px">Rabu, 17 Juli 2024</div>
                        </div>
                        <div class="position-absolute start-20 z-index-0 bg-cover"
                            style="width: 1300px; height: 600px; margin-top: 1640px; margin-left: 10px; margin-right: 30px; background-image:url('../assets/img/5.jpg'); background-position: center;">
                        </div>
                        <div class="col-xl-50 col-md-50" style="margin-left: 40px; margin-top: 630px;">
                            <div class="custom-text4" style="margin-left: -40px">Kegiatan Pemaparan Program Kerja Monodisiplin dan Multidisiplin dari Mahasiswa KKN Tim II Universitas Diponegoro</div>
                            <div class="custom-text5" style="margin-left: -40px">Senin, 22 Juli 2024</div>
                        </div>
                        <div class="col-xl-15 col-md-15 text-center" id="multidisiplin" style="margin-left: 20px; margin-top: -10px;">
                            <div class="custom-text3" style="margin-left: -20px; margin-top: 35px;">
                                Program Kerja Multidisiplin KKN Tim II Mahasiswa Universitas Diponegoro
                            </div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 80px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -80px; margin-right: 30px;">
                                <img src="../assets/img/budikdamber.JPG" alt="image 1" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_multidisiplin') }}#multidisiplin1" class="custom-text7" style="text-decoration: none;">Kegiatan Multidisiplin Budikdamber</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Jumat, 26 Juli 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/umkm.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_multidisiplin') }}#multidisiplin2" class="custom-text7" style="text-decoration: none;">Kegiatan Multidisiplin UMKM</a>
                                    <div class="custom-text8" style="margin-top: 0px">Dapur Kanjeng Mami</div>
                                    <div class="custom-text8" style="margin-top: -15px">Jumat, 02 Agustus 2024</div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-15 col-md-15 text-center" id="monodisiplin" style="margin-left: 20px; margin-top: -10px;">
                            <div class="custom-text3" style="margin-left: -20px; margin-top: 35px;">
                                Program Kerja Monodisiplin KKN Tim II Mahasiswa Universitas Diponegoro
                            </div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 80px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -80px; margin-right: 30px;">
                                <img src="../assets/img/mono S.JPG" alt="image 1" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_silvani') }}#monodisiplin1" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Silvani <br> Ika Wulandari</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Jumat, 26 Juli 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/mono SJ.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_silvani') }}#monodisiplin2" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Silvani </br> Ika Wulandari</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Selasa, 30 Juli 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/mono SJ.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_jasmine') }}#monodisiplin1" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Jasmine </br> Effia Zahira</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Selasa, 30 Juli 2024</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around" style="margin-left: 60px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/mono R2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_reza') }}#monodisiplin1" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin </br> Muhammad Rizky Alfareza</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Selasa, 30 Juli 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/mono R.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_reza') }}#monodisiplin2" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin </br> Muhammad Rizky Alfareza</a>
                                    <div class="custom-text8" style="margin-top: 0px">SD Negeri 2 Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Rabu, 31 Juli 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/mono J.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_jasmine') }}#monodisiplin2" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Jasmine </br> Effia Zahira</a>
                                    <div class="custom-text8" style="margin-top: 0px">Dapur Kanjeng Mami</div>
                                    <div class="custom-text8" style="margin-top: -15px">Jumat, 02 Agustus 2024</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around" style="margin-left: 60px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/mono A2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_akbar') }}#monodisiplin1" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Akbar </br> Hidayah</a>
                                    <div class="custom-text8" style="margin-top: 0px">Dapur Kanjeng Mami</div>
                                    <div class="custom-text8" style="margin-top: -15px">Jumat, 02 Agustus 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/mono A.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_akbar') }}#monodisiplin2" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Akbar </br> Hidayah</a>
                                    <div class="custom-text8" style="margin-top: 0px">Dapur Kanjeng Mami</div>
                                    <div class="custom-text8" style="margin-top: -15px">Jumat, 02 Agustus 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/mono P.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_putri') }}#monodisiplin1" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Putri </br> Devina Soraya</a>
                                    <div class="custom-text8" style="margin-top: 0px">SD Negeri 2 Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Selasa, 06 Agustus 2024</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around" style="margin-left: 60px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/mono P2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_putri') }}#monodisiplin2" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Putri </br> Devina Soraya</a>
                                    <div class="custom-text8" style="margin-top: 0px">SD Negeri 1 Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Rabu, 07 Agustus 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/mono Y.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_yuli') }}#monodisiplin1" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Yuliana </br> Dwi Nur'aini</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Kamis, 08 Agustus 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/mono Y2.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_yuli') }}#monodisiplin2" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Yuliana </br> Dwi Nur'aini</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Kamis, 08 Agustus 2024</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around" style="margin-left: 60px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/mono PR.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_permata') }}#monodisiplin1" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Mutiara </br> Permata Putri</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Kamis, 08 Agustus 2024</div>
                                </div>
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/mono PR2.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                                <div>
                                    <a href="{{ route('galeri_permata') }}#monodisiplin2" class="custom-text7" style="text-decoration: none;">Kegiatan Monodisiplin Mutiara </br> Permata Putri</a>
                                    <div class="custom-text8" style="margin-top: 0px">Balai Desa Ngijo</div>
                                    <div class="custom-text8" style="margin-top: -15px">Kamis, 08 Agustus 2024</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</x-app-layout>

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

    .custom-text7 {
        color: #000000;
        font-size: 20px;
        font-weight: bold;
        font-family: Lucida Bright;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text8 {
        color: hsl(0, 0%, 49%);
        font-size: 20px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: left;
        margin: 10px 0;
    }

    .custom-text9 {
        color: #000000;
        font-size: 20px;
        font-weight: regular;
        font-family: Perpetua;
        text-align: left;
        margin: 10px 0;
    }
</style>