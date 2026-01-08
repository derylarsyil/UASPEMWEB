@extends('layouts.main')

@section('title','Tambah Produk')

@section('content')
<div class="container py-5">
    <h3>Tambah Produk</h3>

    <form method="POST" action="/admin/product" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        {{-- TAMBAHAN SAJA --}}
        <div class="mb-3">
            <label>Gambar Produk</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-dark">Simpan</button>
    </form>
</div>
@endsection
