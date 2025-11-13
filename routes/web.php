<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware(['prevent.cross.login'])->group(function () {
    Route::get('/tenaga-medis/login', [AuthController::class, 'showTenagaMedisLogin'])
        ->name('tenaga-medis.login');
    Route::post('/tenaga-medis/login', [AuthController::class, 'tenagaMedisLogin'])
        ->name('tenaga-medis.login.post');

    Route::get('/pasien/login', [PasienController::class, 'showPasienLogin'])
        ->name('pasien.login');
    Route::post('/pasien/login', [PasienController::class, 'login'])
        ->name('pasien.login.post');
});

Route::middleware(['auth:tenaga_medis'])
    ->prefix('tenaga-medis')
    ->name('tenaga-medis.')
    ->group(function () {
         Route::get('/dashboard', function () {
            return view('dokterdash');
        })->name('dashboard');  

        Route::post('/logout', [AuthController::class, 'tenagaMedisLogout']) ->name('logout');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/HalamanDokter', function () {
            return view('dokterumum.HalamanDokter');
        })->name('halaman-dokter');

        Route::resource('rekam-medis', RekamMedisController::class);
        Route::get('/RekamMedis', [RekamMedisController::class, 'rekamMedis'])->name('rekamMedis');
        Route::get('/RekamMedisdetail', function () {
            return view('RekamMedisdetail');
        })->name('rekam-medis-detail');

        Route::resource('resep', ResepController::class);
        Route::get('/resep/{id}/preview', [ResepController::class, 'preview'])->name('resep.preview');
        Route::get('/resep/{id}/download', [ResepController::class, 'download'])->name('resep.download');

        Route::resource('screening', ScreeningController::class);
        Route::get('/screening', function () {
            return view('skrining');
        })->name('screening');

        Route::get('/obat', function () {
            return view('farmasi.obat');
        })->name('obat');

        Route::get('/dokter', function () {
            return view('dokter');
        })->name('dokter');
    });

Route::middleware(['auth:pasien', 'prevent.cross.login'])
    ->prefix('pasien')
    ->name('pasien.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('pasien.dashboard');
        })->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/profil', function () {
            return view('profil');
        })->name('profil');

        Route::get('/JanjiTemu', function () {
            return view('JanjiTemu');
        })->name('janji-temu');
    });

require __DIR__ . '/auth.php';
