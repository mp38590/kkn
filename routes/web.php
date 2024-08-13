<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route
Route::get('/beranda', [UserController::class, 'kritik'])->name('beranda');
Route::post('/submit-kritik', [UserController::class, 'simpanKritik'])->name('submit-kritik');

Route::get('/profil-desa', function () {
    return view('profil_desa');
})->name('profil_desa');

Route::get('/visi-misi', function () {
    return view('visi_misi');
})->name('visi_misi');

Route::get('/tugas-fungsi', function () {
    return view('tugas_fungsi');
})->name('tugas_fungsi');

Route::get('/struktur-organisasi', function () {
    return view('struktur_organisasi');
})->name('struktur_organisasi');

Route::get('/pelayanan-publik', [UserController::class, 'pelayanan'])->name('pelayanan_publik');
Route::post('/submit', [UserController::class, 'simpan'])->name('submit');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/umkm', function () {
    return view('umkm');
})->name('umkm');

Route::get('/peta-wilayah', function () {
    return view('peta_wilayah');
})->name('peta_wilayah');

Route::get('/data', [DataController::class, 'index'])->name('data');
Route::post('/import-data', [DataController::class, 'pegawaiImport'])->name('import_data');
Route::get('/data_ngijo_kulon', [DataController::class, 'ngijoKulon'])->name('data_ngijo_kulon');
Route::get('/data_ngijo_tengah', [DataController::class, 'ngijoTengah'])->name('data_ngijo_tengah');
Route::get('/data_ngijo_wetan', [DataController::class, 'ngijoWetan'])->name('data_ngijo_wetan');
Route::get('/data_nglano_wetan', [DataController::class, 'nglanoWetan'])->name('data_nglano_wetan');
Route::get('/data_pokoh', [DataController::class, 'pokoh'])->name('data_pokoh');
Route::get('/data_belum_kawin', [DataController::class, 'belumKawin'])->name('data_belum_kawin');
Route::get('/data_kawin', [DataController::class, 'kawin'])->name('data_kawin');
Route::get('/data_non_pelajar', [DataController::class, 'nonPelajar'])->name('data_non_pelajar');
Route::get('/data_pelajar', [DataController::class, 'pelajar'])->name('data_pelajar');

Route::get('/infografis', function () {
    return view('infografis');
})->name('infografis');

Route::get('/galeri-silvani', function () {
    return view('galeri_silvani');
})->name('galeri_silvani');

Route::get('/galeri-akbar', function () {
    return view('galeri_akbar');
})->name('galeri_akbar');

Route::get('/galeri-jasmine', function () {
    return view('galeri_jasmine');
})->name('galeri_jasmine');

Route::get('/galeri-reza', function () {
    return view('galeri_reza');
})->name('galeri_reza');

Route::get('/galeri-putri', function () {
    return view('galeri_putri');
})->name('galeri_putri');

Route::get('/galeri-yuli', function () {
    return view('galeri_yuli');
})->name('galeri_yuli');

Route::get('/galeri-permata', function () {
    return view('galeri_permata');
})->name('galeri_permata');

Route::get('/galeri-multidisiplin', function () {
    return view('galeri_multidisiplin');
})->name('galeri_multidisiplin');

Route::get('/mono-jasmine-pertama', function () {
    return view('mono_jasmine_pertama');
})->name('mono_jasmine_pertama');

Route::get('/mono-jasmine-kedua', function () {
    return view('mono_jasmine_kedua');
})->name('mono_jasmine_kedua');

Route::get('/mono-yuli-pertama', function () {
    return view('mono_yuli_pertama');
})->name('mono_yuli_pertama');

Route::get('/mono-yuli-kedua', function () {
    return view('mono_yuli_kedua');
})->name('mono_yuli_kedua');

Route::get('/mono-permata-pertama', function () {
    return view('mono_permata_pertama');
})->name('mono_permata_pertama');

Route::get('/mono-permata-kedua', function () {
    return view('mono_permata_kedua');
})->name('mono_permata_kedua');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login-layanan', [LoginController::class, 'store'])->name('login_layanan');

Route::group(['middleware' => ['auth', 'level:Admin']], function () {
    Route::get('/layanan', [AdminController::class, 'layanan'])->name('layanan');
    Route::delete('/hapus-data/{id}', [AdminController::class, 'delete'])->name('hapus_data');
    Route::get('/kritik', [AdminController::class, 'kritik'])->name('kritik');
    Route::get('/data-admin', [DataController::class, 'indexAdmin'])->name('data_admin');
    Route::post('/import-data', [DataController::class, 'dataImport'])->name('import_data');
});

