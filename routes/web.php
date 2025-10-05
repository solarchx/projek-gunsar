<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\DokterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/farmasi/obat', function () {
    return view('farmasi.obat');
});

Route::get('/pasien/daftar', function () {
    return view('pasien.daftar');
});

Route::get('/pasien/pasien', function () {
    return view('pasien.pasien');
});

Route::get('/pasien/profil', function () {
    return view('pasien.profil');
});

Route::get('/pasien/riwayat', function () {
    return view('pasien.riwayat');
});

Route::get('/pasien/jadwal', function () {
    return view('pasien.jadwal');
});

Route::get('/dashboard', function () {
    return view('dokterdash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dokterdash');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
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

// Route::get('RekamMedis', [RekamMedisController::class, 'rekamMedis'])
//     ->name('rekamMedis');

require __DIR__ . '/auth.php';