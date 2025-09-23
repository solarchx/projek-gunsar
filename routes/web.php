<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmasiController;

// ✅ Route resource untuk Farmasi
Route::resource('farmasi', FarmasiController::class);

// ✅ Halaman utama
Route::get('/', function () {
    return view('index');
});

// ✅ Route untuk halaman dokter
Route::view('/dokter', 'dokter')->name('dokter');
Route::view('/dokterdash', 'dokterdash')->name('dokterdash');

// ✅ Route untuk halaman dokter umum
Route::prefix('dokterumum')->group(function () {
    Route::view('/HalamanDokter', 'dokterumum.HalamanDokter')->name('dokterumum.halaman');
    Route::view('/FormDiagnosa', 'dokterumum.FormDiagnosa')->name('dokterumum.diagnosa');
    Route::view('/RekamMedis', 'dokterumum.RekamMedis')->name('dokterumum.rekam');
    Route::view('/JanjiTemu', 'dokterumum.JanjiTemu')->name('dokterumum.janji');
    Route::view('/ResepObat', 'dokterumum.ResepObat')->name('dokterumum.resep');
});

// ✅ Route untuk profil
Route::view('/profil', 'profil')->name('profil');
