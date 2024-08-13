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
                            <div class="custom-text">STRUKTUR ORGANISASI</div>
                        </div>
                        <div class="position-absolute start-20 z-index-0 bg-cover"
                            style="width: 1300px; height: 800px; margin-top: 180px; margin-left: 10px; margin-right: 30px; background-image:url('../assets/img/struktur_organisasi.jpg'); background-position: center;">
                        </div>
                        <div class="custom-text4" style="margin-left: -40px; margin-top: 870px;">Detail Struktur Organisasi Desa Ngijo</div>
                        <div class="custom-text5" style="margin-left: -40px">
                            1. Kepala Desa </br>
                                <div class="custom-text5" style="margin-left: 20px">Suwarso, S.Sos</div>
                            2. Sekretaris </br>
                                <div class="custom-text5" style="margin-left: 20px">Koko Harmoko, S.T</div>
                            3. Kepala Urusan </br>
                                <ul class="circle-list">
                                    <li style="margin-left: 7px;">Utami Ningsih, S.E sebagai Kepala Urusan TU dan Umum</li>
                                    <li style="margin-left: 7px;">Dyah Triyatsih sebagai Kepala Urusan Perencanaan</li>
                                    <li style="margin-left: 7px;">Rena Rohyani, S.Pd sebagai Kepala Urusan Keuangan</li>
                                </ul>
                            4. Kepala Seksi </br>
                                <ul class="circle-list">
                                    <li style="margin-left: 7px;">Bambang Wiranto sebagai Kepala Seksi Pemerintahan</li>
                                    <li style="margin-left: 7px;">Ibnu Yahya, Amd sebagai Kepala Seksi Pelayanan</li>
                                    <li style="margin-left: 7px;">Ibnu Yahya, Amd sebagai Plh. Kepala Seksi Kesejahteraan</li>
                                </ul>
                            5. Kepala Dusun </br>
                                <ul class="circle-list">
                                    <li style="margin-left: 7px;">Agus Ary Priyadi sebagai Kepala Dusun Ngijo Kulon</li>
                                    <li style="margin-left: 7px;">Oktavian Dita Ratnasari, S.T sebagai Kepala Dusun Ngijo Tengah </li>
                                    <li style="margin-left: 7px;">Supriyono sebagai Kepala Dusun Ngijo Wetan</li>
                                    <li style="margin-left: 7px;">Sriyanto, SE.MM sebagai Kepala Dusun Pokoh</li>
                                    <li style="margin-left: 7px;">Ayudi, Amd sebagai Kepala Dusun Nglano Wetan</li>
                                </ul>
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
</style>