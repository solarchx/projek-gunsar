<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dokter.php', function () {
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

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/dokterumum/RekamMedis', function () {
    return view('dokterumum.RekamMedis');
});

Route::get('/dokterumum/JanjiTemu', function () {
    return view('dokterumum.JanjiTemu');
});

require __DIR__.'/auth.php';
