<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienDashboardController;
use Illuminate\Support\Facades\Auth;
use App\Filament\CustomPages\Login;

Route::get('/', function () {
    return view('index');
});

Route::get('/farmasi/obat', function () {
    return view('farmasi.obat');
});


Route::get('tenaga-medis/login', [AuthController::class, 'showTenagaMedisLogin'])->name('tenaga-medis.login');
Route::post('tenaga-medis/login', [AuthController::class, 'tenagaMedisLogin'])->name('tenaga-medis.login.post');
Route::post('tenaga-medis/logout', [AuthController::class, 'tenagaMedisLogout'])->name('tenaga-medis.logout');

Route::middleware('auth:tenaga_medis')->group(function () {
    Route::get('dokter/dashboard', function () {
        return view('dokterdash');
    })->name('dokter.dashboard');
    // Route::get('perawat/dashboard', function () {
    //     return view('dokterdash'); // sesuaikan dengan view perawat
    // })->name('perawat.dashboard');
    // Route::get('farmasi/dashboard', function () {
    //     return view('dokterdash'); // sesuaikan dengan view farmasi
    // })->name('farmasi.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dokterumum/HalamanDokter', function () {
    return view('dokterumum.HalamanDokter');
});

Route::resource('dokter', DokterController::class);

Route::get('/dashboard/screening', function () {
    return view('skrining');
})->name('screening');

Route::resource('screening', ScreeningController::class);

// Route untuk profil pasien
Route::get('/profil', function () {
    return view('profil');
})->name('profil');

// Route untuk dokter
Route::resource('rekam-medis', RekamMedisController::class);
Route::resource('resep', ResepController::class);

Route::get('/resep/{id}/preview', [ResepController::class, 'preview'])->name('resep.preview');
Route::get('/resep/{id}/download', [ResepController::class, 'download'])->name('resep.download');

Route::get('/JanjiTemu', function () {
    return view('JanjiTemu');
});

Route::get('/dokterumum/HalamanDokter', function () {
    return view('dokterumum.HalamanDokter');
});

Route::get('/RekamMedisdetail', function () {
    return view('RekamMedisdetail');
});

Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('RekamMedis', [RekamMedisController::class, 'rekamMedis'])
    ->name('rekamMedis');

require __DIR__ . '/auth.php';
