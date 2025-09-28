<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\ResepController;

Route::get('/', function () {
    return view('index');
});

Route::get('/farmasi/obat', function () {
    return view('farmasi.obat');
});

// Route for dokter  
Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('RekamMedis', [RekamMedisController::class, 'rekamMedis'])
    ->name('rekamMedis');

Route::get('/dashboard', function () {
    return view('dokterdash');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dokterumum/HalamanDokter', function () {
    return view('dokterumum.HalamanDokter');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/JanjiTemu', function () {
    return view('JanjiTemu');
});

Route::get('/dashboard/screening', function () {
    return view('skrining');
});

// route for pasien
Route::get('/profil', function () {
    return view('profil');
});

Route::resource('rekam-medis', RekamMedisController::class);
Route::resource('resep', ResepController::class);

Route::get('/resep/{id}/preview', [ResepController::class, 'preview'])->name('resep.preview');
Route::get('/resep/{id}/download', [ResepController::class, 'download'])->name('resep.download');

require __DIR__ . '/auth.php';
