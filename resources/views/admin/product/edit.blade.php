@extends('layouts.main')

@section('title','Edit Produk')

@section('content')
<div class="container py-5">
    <h3>Edit Produk</h3>

    <form method="POST"
          action="{{ url('/admin/product/'.$product->id) }}"
          enctype="multipart/form-data">

        @csrf
        @method('PUT') {{-- WAJIB --}}

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control"
                   value="{{ $product->name }}">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control"
                   value="{{ $product->price }}">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" class="form-control"
                   value="{{ $product->stock }}">
        </div>

        <div class="mb-3">
            <label>Gambar Produk</label>
            <input type="file" name="image" class="form-control">
            @if($product->image)
                <img src="{{ asset('uploads/products/'.$product->image) }}"
                     width="120" class="mt-2">
            @endif
        </div>

        <button class="btn btn-dark">Update</button>
    </form>
</div>
@endsection
