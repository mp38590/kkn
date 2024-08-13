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
                        <div class="col-xl-15 col-md-15 text-center" style="margin-left: 20px; margin-top: -300px;">
                            <div class="custom-text">PROFIL DESA</div>
                        </div>
                        <div class="container col-xl-19 col-md-15">
                            <div class="custom-text2" style="margin-left: -20px; margin-top: -200px;">Desa Ngijo memiliki luas wilayah kurang lebih 232.761,5 Ha dengan komposisi 60 % lahan pertanian
                                dan 40 % pemukiman penduduk. Lahan pertanian yang ada di Desa Ngijo seluas 166,8 Ha dan termasuk 
                                kategori pertanian basah atau lahan basah. Desa Ngijo berbatasan dengan wilayah sebelah utara
                                berbatasan dengan desa Suruh, sebelah selatan berbatasan dengan desa Papahan, sebelah barat 
                                berbatasan dengan desa Buran, sebelah timur berbatasan dengan kelurahan Bejen.</div>
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
</style>