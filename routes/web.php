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
        ";
    });
    
    Route::get('/profile', function () {
        return "
        <h1>Halaman Profile</h1>
        <a href='/'>Home</a>
        <a href='/about'>About</a>
    ";
});