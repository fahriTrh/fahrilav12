<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    $name = 'Fakhri Alauddin Tarihoran';
    return view('profile')->with(['name' => $name]);
});

Route::get('/contact', function () {
    return view('contact');
});
