<?php

use App\Http\Controllers\Mahasiswa\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
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

Route::get('/uts-laravel', function () {
    $page_title = 'Home';
    return view('uts.home', compact('page_title'));
});

Route::get('/manage-mahasiswa', [MahasiswaController::class, 'manage']);