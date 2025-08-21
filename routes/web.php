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

Route::get('/dokterdash', function () {
    return view('dokterdash');
});

Route::get('/dokterumum/HalamanDokter', function () {
    return view('dokterumum.HalamanDokter');
});
Route::get('/dokterumum/FormDiagnosa', function () {
    return view('dokterumum.FormDiagnosa');
});

Route::get('/dokterumum/RekamMedis', function () {
    return view('dokterumum.RekamMedis');
});

Route::get('/dokterumum/JanjiTemu', function () {
    return view('dokterumum.JanjiTemu');
});

// route for pasien
Route::get('/profil', function () {
    return view('profil');
});


require __DIR__.'/auth.php';
