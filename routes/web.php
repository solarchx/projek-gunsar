<?php

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
Route::get('/dokter/HalamanDokter', function () {
    return view('dokter.HalamanDokter');
});
Route::get('/dokter/FormDiagnosa', function () {
    return view('dokter.FormDiagnosa');
});
