<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route for dokter  
Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('/dashboard', function () {
    return view('dokterdash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dokterumum/HalamanDokter', function () {
    return view('dokterumum.HalamanDokter');
});
Route::get('/doktergigi/HalamanDokter', function () {
    return view('doktergigi.HalamanDokter');
});
Route::get('/dokterumum/FormDiagnosa', function () {
    return view('dokterumum.FormDiagnosa');
});
Route::get('/doktergigi/FormDiagnosa', function () {
    return view('doktergigi.FormDiagnosa');
});
Route::get('/dokterumum/RekamMedisdetail', function () {
    return view('dokterumum.RekamMedisdetail');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/dokterumum/RekamMedis', function () {
    return view('dokterumum.RekamMedis');
});

Route::get('/dokterumum/JanjiTemu', function () {
    return view('dokterumum.JanjiTemu');
});

Route::get('/dokterumum/ResepObat', function () {
    return view('dokterumum.ResepObat');
});

Route::get('/dashboard/screening', function () {
    return view('skrining');
});

// route for pasien
Route::get('/profil', function () {
    return view('profil');
});


require __DIR__.'/auth.php';
