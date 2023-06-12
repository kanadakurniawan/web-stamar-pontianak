<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RootController;

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

Route::controller(RootController::class)->name('home.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/hubungi-kami', function () { return view('hubungi-kami'); })->name('hubungi-kami');
});

# Profil
Route::controller(RootController::class)->name('profil.')->group(function () {
    // Route::get('/', function () { return view('profil.index'); })->name('index');
    Route::get('/sejarah', function () { return view('profil.sejarah'); })->name('sejarah');
    Route::get('/visi-dan-misi', function () { return view('profil.visi-dan-misi'); })->name('visi-dan-misi');
    Route::get('/tugas-dan-fungsi', function () { return view('profil.tugas-dan-fungsi'); })->name('tugas-dan-fungsi');
    Route::get('/logo-dan-panji', function () { return view('profil.logo-dan-panji'); })->name('logo-dan-panji');
    Route::get('/struktur-organisasi', function () { return view('profil.struktur-organisasi'); })->name('struktur-organisasi');
    Route::get('/sdm', function () { return view('profil.sdm'); })->name('sdm');
});

# Kuisioner
Route::controller(RootController::class)->name('kuisioner.')->group(function () {
    Route::get('/kepuasan-masyarakat', function () { return view('kuisioner.kepuasan-masyarakat'); })->name('kepuasan-masyarakat');
    Route::get('/persepsi-korupsi', function () { return view('kuisioner.persepsi-korupsi'); })->name('persepsi-korupsi');
});

# Publikasi
Route::controller(RootController::class)->name('publikasi.')->group(function () {
    Route::get('/transparansi-kinerja', function () { return view('publikasi.transparansi-kinerja'); })->name('transparansi-kinerja');
});

# Pelayanan Publik
Route::controller(RootController::class)->name('layanan-publik.')->group(function () {
    Route::get('/maklumat-pelayanan', function () { return view('layanan-publik.maklumat-pelayanan'); })->name('maklumat-pelayanan');
    Route::get('/prosedur-pelayanan', function () { return view('layanan-publik.prosedur-pelayanan'); })->name('prosedur-pelayanan');
    Route::get('/tarif-produk', function () { return view('layanan-publik.tarif-produk'); })->name('tarif-produk');
});

# Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () { return view('admin.index'); })->name('index');
    Route::get('/sejarah', function () { return view('profil.sejarah'); })->name('sejarah');
});
