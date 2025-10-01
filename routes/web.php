<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "
        <h1>Halaman About</h1>
        <a href='/'>Home</a>
        <a href='/profile'>Profile</a>
        <a href='/mahasiswa'>Mahasiswa</a>
        <a href='/contact'>Contact</a>
        ";
});

Route::get('/profile', function () {
    return "
        <h1>Halaman Profile</h1>
        <a href='/'>Home</a>
        <a href='/about'>About</a>
        <a href='/mahasiswa'>Mahasiswa</a>
        <a href='/contact'>Contact</a>
    ";
});

Route::get('/mahasiswa', function () {
    return "
        <h1>Halaman Mahasiswa</h1>
        <a href='/'>Home</a>
        <a href='/about'>About</a>
        <a href='/profile'>Profile</a>
        <a href='/contact'>Contact</a>
    ";
});

Route::get('/contact', function () {
    return "
        <h1>Halaman Contact</h1>
        <a href='/'>Home</a>
        <a href='/about'>About</a>
        <a href='/profile'>Profile</a>
        <a href='/mahasiswa'>Mahasiswa</a>
    ";
});
