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
                        <div class="col-xl-15 col-md-15 text-center" style="margin-left: 20px; margin-top: -270px;">
                            <div class="custom-text">VISI & MISI</div>
                            <div class="custom-text3" style="margin-left: -20px; margin-top: 35px;">Visi</div>
                        </div>
                        <div class="container col-xl-19 col-md-15">
                            <div class="custom-text2" style="margin-left: px; margin-top: -150px;">Desa Ngijo yang bersih, tertata, 
                                dan maju menuju Desa swasembada sejahtera</div>
                        </div>
                        <div class="col-xl-15 col-md-15 text-center" style="margin-left: 20px; margin-top: -300px;">
                            <div class="custom-text3" style="margin-left: -20px; margin-top: 210px;">Misi</div>
                        </div>
                        <div class="container col-xl-19 col-md-15">
                            <div class="custom-text2" style="margin-left: px; margin-top: -50px;">
                            1. Mewujudkan pemerintah desa Ngijo yang bersih dan transparan </br>
                            2. Menjadikan desa Ngijo yang tertata dan maju </br>
                            3. Menjadikan desa Ngijo yang berswasembada sejahtera
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
</style>