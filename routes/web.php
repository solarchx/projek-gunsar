<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienDashboardController;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/pasien', [PasienDashboardController::class, 'index'])->name('pasien.dashboard');
    Route::get('/dashboard/pasien/profil', [PasienDashboardController::class, 'profil'])->name('pasien.profil');
    Route::get('/dashboard/pasien/jadwal', [PasienDashboardController::class, 'jadwal'])->name('pasien.jadwal');
    Route::get('/dashboard/pasien/riwayat', [PasienDashboardController::class, 'riwayat'])->name('pasien.riwayat');
    Route::get('/dashboard/pasien/daftar', [PasienDashboardController::class, 'pendaftaran'])->name('pasien.pendaftaran');
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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/pasien', [PasienDashboardController::class, 'index'])->name('pasien.dashboard');
});

// Route::get('/logout', function () {
//     Auth::logout();
//     return redirect('/login');
// })->name('logout');

require __DIR__.'/auth.php';
