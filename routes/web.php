<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dokter.php', function () {
    return view('dokter');
});

Route::get('/dokterdash.php', function () {
    return view('dokterdash');
});