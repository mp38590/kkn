<x-app-layout>
    <!-- Include CSS and JS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <div class="container position-absolute z-index-sticky top-0" style="z-index: 9999; margin-left: 65px;">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white-admin style="position: relative; z-index: 10000;"/>
            </div>
        </div>
    </div>
    <main class="main-content mt-0" style="background-color: #FFDEAD">
        <div class="col-md-19">
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-15 col-md-15 text-center" style="margin-left: 20px; margin-top: -300px;">
                            <div class="custom-text">KRITIK & SARAN</div>
                        </div>
                        <div class="table-responsive p-0" style="margin-top: -220px;">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-info text-lg font-weight-semibold ps-3" style="text-align: center;">No.</th>
                                        <th class="text-info text-lg font-weight-semibold ps-1" style="text-align: center;">Nama</th>
                                        <th class="text-info text-lg font-weight-semibold ps-1" style="text-align: center;">Alamat Email</th>
                                        <th class="text-info text-lg font-weight-semibold ps-1" style="text-align: center;">Kritik</th>
                                        <th class="text-info text-lg font-weight-semibold ps-1" style="text-align: center;">Saran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $index = 1 @endphp
                                @forelse($data as $dataa)
                                    <tr>
                                        <th class="font-weight-normal text-xl text-dark ps-3">{{ $index++ }}</th>
                                        <th class="font-weight-normal text-xl text-dark ps-1 me-4">{{ $dataa->nama }}</th>
                                        <th class="font-weight-normal text-xl text-dark ps-1">{{ $dataa->alamat_email }}</th>
                                        <th class="font-weight-normal text-xl text-dark ps-1">
                                            {!! nl2br(wordwrap($dataa->kritik, 20, "\n", true)) !!}
                                        </th>
                                            {!! nl2br(wordwrap($dataa->saran, 20, "\n", true)) !!}
                                        </th>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="10" class="text-center">{{ 'Tidak Ada Data yang ditampilkan' }}</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
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
