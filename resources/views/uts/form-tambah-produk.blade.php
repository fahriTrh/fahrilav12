@extends('uts.app')

@section('content')
<div class="container" style="margin-top: 80px;">
    <h2>Halaman {{ $page_title }}</h2>

    <form action="" class="row my-3">
        <div class="col-1 col-md-4 mb-1">
            <label for="kode_produk" class="form-label">Kode Produk</label>
            <input type="text" id="kode_produk" class="form-control" placeholder="Input Kode Produk">
        </div>
        <div class="col-1 col-md-4 mb-1">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" id="nama_produk" class="form-control" placeholder="Input Nama Produk">
        </div>
        <div class="col-1 col-md-4 mb-1">
            <label for="jenis_produk" class="form-label">Jenis Produk</label>
            <select id="jenis_produk" class="form-control">
                <option selected value="">Pilih Produk</option>
            </select>
        </div>
        <div class="col-1 col-md-6 mb-1">
            <label for="harga_produk" class="form-label">Harga</label>
            <input type="text" id="harga_produk" class="form-control" placeholder="Input Harga">
        </div>
        <div class="col-1 col-md-6 mb-1 d-flex align-items-end">
            <button class="btn btn-success" style="width: 100%;">Simpan</button>
        </div>
    </form>
</div>
@endsection