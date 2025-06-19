<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
    })->name('mahasiswa');
