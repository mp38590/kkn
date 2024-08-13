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
                        <div class="col-xl-15 col-md-15 text-center" style="margin-left: 20px; margin-top: 80px;">
                            <div class="custom-text">PELAYANAN PUBLIK</div>
                        </div>

                        <div class="col-xl-50 col-md-50" style="margin-left: 40px; color: #FFFFFF; margin-top: 20px;">
                            <div class="card" style="width: 1200px; height: 590px; background-color: #FFFFFF; padding: 20px; margin-top: 20px; border: 5px solid rgba(246, 103, 43, 0.62);">
                                <div class="card-body pt-1">
                                    <div class="col-md-15">
                                        <div class="position-relative w-100">

                                            <!-- Flash message untuk pesan sukses -->
                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif

                                            <form role="form" method="POST" action="{{ route('submit') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nama" class="form-control-label custom-text11">Nama</label>
        <div class="@error('nama') border border-danger rounded-3 @enderror">
            <input name="nama" class="form-control custom-text12" type="text" placeholder="Masukkan nama Anda" id="nama" value="{{ old('nama') }}">
        </div>
        @error('nama') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <label for="telepon" class="form-control-label custom-text11">Nomer Telepon</label>
        <div class="@error('nomer_telepon') border border-danger rounded-3 @enderror">
            <input name="nomer_telepon" class="form-control custom-text12" type="text" placeholder="Masukkan nomer telepon Anda" id="nomer_telepon" value="{{ old('nomer_telepon') }}">
        </div>
        @error('nomer_telepon') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <label for="alamat_email" class="form-control-label custom-text11">Alamat Email</label>
        <div class="@error('alamat_email') border border-danger rounded-3 @enderror">
            <input name="alamat_email" class="form-control custom-text12" type="text" placeholder="Masukkan alamat email Anda" id="alamat_email" value="{{ old('alamat_email') }}">
        </div>
        @error('alamat_email') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <label for="keperluan" class="form-control-label custom-text11">Keperluan</label>
        <div class="@error('keperluan') border border-danger rounded-3 @enderror">
            <input name="keperluan" class="form-control custom-text12" style="height: 80px;" type="text" placeholder="Masukkan keperluan yang Anda butuhkan" id="keperluan" value="{{ old('keperluan') }}">
        </div>
        @error('keperluan') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group">
        <label for="file" class="form-control-label">Nama Dokumen</label>
        <div class="@error('file') border border-danger rounded-3 @enderror">
            <div class="mb-3">
                <input class="form-control" type="file" name="file[]" id="file" multiple>
            </div>
        </div>
        @error('file') <div class="text-danger">{{ $message }}</div> @enderror
        @error('file.*') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="card-footer" style="margin-top: 40px;">
        <button type="submit" class="btn btn-warning custom-text4">Kirim</button>
    </div>
</form>


                                        </div>
                                    </div>
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
        font-size: 25px;
        font-weight: bold;
        font-family: Cambria;
        text-align: center;
        margin: 10px 0;
    }
</style>
