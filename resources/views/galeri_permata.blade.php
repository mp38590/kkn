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
                            <div class="custom-text3" style="margin-left: -20px; margin-top: 35px;">Kegiatan Monodisiplin Mutiara Permata Putri</div>
                            <div class="custom-text4" id="monodisiplin1" style="margin-left: -20px; margin-top: 5px;">Aplikasi Berbasis Mobile untuk Otomatisasi Bukti Transaksi bagi BUMDes</div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 80px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -80px; margin-right: 30px;">
                                <img src="../assets/img/S1.JPG" alt="image 1" style="width: 300px; height: 180px;">
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/S2.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/S3.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            </div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 80px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -80px; margin-right: 30px;">
                                <img src="../assets/img/S4.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/S5.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/S6.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            </div>
                        </div>
                        <div class="col-xl-15 col-md-15 text-center" style="margin-left: 20px; margin-top: 20px;">
                            <div class="custom-text4" id="monodisiplin2" style="margin-left: -20px; margin-top: 5px;">Aplikasi Website Berbasis Informasi Terintegrasi untuk Desa Ngijo dengan Akses Penuh Bagi Perangkat Desa</div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 80px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -80px; margin-right: 30px;">
                                <img src="../assets/img/P7.jpeg" alt="image 1" style="width: 300px; height: 180px;">
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/P8.jpeg" alt="image 2" style="width: 300px; height: 180px;">
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/S9.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            </div>
                        </div>
                        <div class="d-flex justify-content-around" style="margin-left: 80px; margin-bottom: 30px;">
                            <div class="d-block" style="margin-top: 30px; margin-left: -80px; margin-right: 30px;">
                                <img src="../assets/img/S10.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 0px;">
                                <img src="../assets/img/S11.JPG" alt="image 2" style="width: 300px; height: 180px;">
                            </div>

                            <div class="d-block" style="margin-top: 30px; margin-left: -50px; margin-right: 30px;">
                                <img src="../assets/img/S12.JPG" alt="image 2" style="width: 300px; height: 180px;">
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

    .custom-text10 {
        color: #000000;
        font-size: 20px;
        font-weight: bold;
        font-family: Cambria;
        text-align: left;
    }
</style>