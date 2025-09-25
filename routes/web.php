<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dokterumum/FormDiagnosa', function () {
    return view('dokterumum.FormDiagnosa');
});
Route::get('/RekamMedisdetail', function () {
    return view('RekamMedisdetail');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/RekamMedis', function () {
    return view('RekamMedis');
});

Route::get('/JanjiTemu', function () {
    return view('JanjiTemu');
});

Route::get('/ResepObat', function () {
    return view('ResepObat');
});

Route::get('/dashboard/screening', function () {
    return view('skrining');
});

// route for pasien
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

require __DIR__.'/auth.php';
