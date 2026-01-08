@extends('layouts.main')

@section('title','Admin Produk')

@section('content')
<div class="container py-5">
    <h3>Manajemen Produk</h3>

    <a href="/admin/product/create" class="btn btn-dark mb-3">
        + Tambah Produk
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>
                    @if($product->image)
                        <img src="{{ asset('uploads/products/'.$product->image) }}" width="80">
                    @endif
                </td>
                <td>{{ $product->name }}</td>
                <td>Rp {{ number_format($product->price) }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="/admin/product/{{ $product->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                    <form action="/admin/product/{{ $product->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus produk?')" class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
