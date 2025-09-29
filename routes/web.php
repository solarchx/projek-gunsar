<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route untuk autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dokterdash');
    })->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::resource('dokter', DokterController::class);

Route::prefix('dokterumum')->name('dokterumum.')->group(function () {
    Route::get('/HalamanDokter', function () {
        return view('dokterumum.HalamanDokter');
    })->name('HalamanDokter');
    
    Route::get('/FormDiagnosa', function () {
        return view('dokterumum.FormDiagnosa');
    })->name('FormDiagnosa');

    Route::get('/RekamMedisdetail', function () {
        return view('dokterumum.RekamMedisdetail');
    })->name('RekamMedisdetail');
    
    Route::get('/RekamMedis', function () {
        return view('dokterumum.RekamMedis');
    })->name('RekamMedis');
    
    Route::get('/JanjiTemu', function () {
        return view('dokterumum.JanjiTemu');
    })->name('JanjiTemu');
});


// Route untuk screening
Route::get('/dashboard/screening', function () {
    return view('skrining');
})->name('screening');

Route::resource('screening', ScreeningController::class); 

// Route untuk profil pasien
Route::get('/profil', function () {
    return view('profil');
})->name('profil');

require __DIR__.'/auth.php';