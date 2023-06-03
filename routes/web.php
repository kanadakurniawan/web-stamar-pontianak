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

// Route::get('/', function () { return view('index'); })->name('beranda');
Route::controller(RootController::class)->name('home.')->group(function () {
    Route::get('/', 'index')->name('index');
});

# Profil
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', function () { return view('profil.index'); })->name('index');
    Route::get('/sejarah', function () { return view('profil.sejarah'); })->name('sejarah');
    Route::get('/visi-dan-misi', function () { return view('profil.visi-dan-misi'); })->name('visi-dan-misi');
    Route::get('/tugas-dan-fungsi', function () { return view('profil.tugas-dan-fungsi'); })->name('tugas-dan-fungsi');
    Route::get('/logo-dan-panji', function () { return view('profil.logo-dan-panji'); })->name('logo-dan-panji');
    Route::get('/struktur-organisasi', function () { return view('profil.struktur-organisasi'); })->name('struktur-organisasi');
    Route::get('/sdm', function () { return view('profil.sdm'); })->name('sdm');
});

# Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () { return view('admin.index'); })->name('index');
    Route::get('/sejarah', function () { return view('profil.sejarah'); })->name('sejarah');
});
