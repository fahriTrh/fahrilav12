@extends('uts.app')

@section('content')
<div class="container" style="margin-top: 80px;">

    <div class="d-flex justify-content-between align-items-center">
        <h2>Halaman {{ $page_title }}</h2>
        <a href="/uts-tambah-produk" class="btn btn-primary">
            Tambah Produk
        </a>
    </div>

    <table class="table table-striped table-primary mt-2">
        <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product['kode_produk'] }}</td>
                <td>{{ $product['nama_produk'] }}</td>
                <td>{{ $product['jenis_produk'] }}</td>
                <td>{{ $product['harga_produk'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection