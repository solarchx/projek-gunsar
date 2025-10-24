<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ObatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienDashboardController;
use App\Http\Controllers\FarmasiController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('/farmasi/obat', function () {
    return redirect()->route('obat.index');
});

// Route for dokter  
Route::get('/dokter', function () {
    return view('dokter');
});
Route::get('/farmasi/index', function () {
    return view('farmasi.index');
});

Route::get('/pasien/daftar', function () {
    return view('dashboard.daftar');
})->name('pendaftaran');

Route::get('/dashboard', function () {
    return view('dokterdash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dokterdash');
    })->name('dashboard');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dokterumum/HalamanDokter', function () {
    return view('dokterumum.HalamanDokter');
});

Route::resource('dokter', DokterController::class);

Route::get('/dashboard/screening', function () {
    return view('skrining');
})->name('screening');

Route::resource('screening', ScreeningController::class);

Route::resource('farmasi', FarmasiController::class);

// Route untuk profil pasien
Route::get('/profil', function () {
    return view('profil');
})->name('profil');
 
// Route untuk dokter
Route::resource('rekam-medis', RekamMedisController::class);
Route::resource('resep', ResepController::class);
Route::resource('pasien', PasienController::class);

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


Route::resource('obat', ObatController::class);
require __DIR__.'/auth.php';