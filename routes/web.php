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

Route::get('/uts-produk', function () {
    $page_title = 'Produk';

    $products = [
        [
            "kode_produk" => "BRG001",
            "nama_produk" => "Pena",
            "jenis_produk" => "Alat Tulis",
            "harga_produk" => 20000
        ],
        [
            "kode_produk" => "BRG002",
            "nama_produk" => "Buku",
            "jenis_produk" => "Alat Tulis",
            "harga_produk" => 15000
        ]
    ];

    return view('uts.produk', compact('page_title', 'products'));
});

Route::get('/uts-tambah-produk', function () {
    $page_title = 'Form Tambah Produk';
    return view('uts.form-tambah-produk', compact('page_title'));
});

Route::get('/manage-mahasiswa', [MahasiswaController::class, 'manage']);