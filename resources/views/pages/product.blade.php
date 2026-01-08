@extends('layouts.main')

@section('title','Produk')

@section('content')
<div class="container py-5">
    <h3 class="mb-4">Produk Terbaru</h3>

    <div class="row">
        @forelse($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">

                @if($product->image)
                    <img 
                        src="{{ asset('uploads/products/'.$product->image) }}"
                        class="card-img-top"
                        style="height:220px;object-fit:cover"
                    >
                @endif

                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">{{ $product->name }}</h5>

                    <p class="mb-1">Rp {{ number_format($product->price) }}</p>
                    <small class="text-muted mb-3">
                        Stok: {{ $product->stock }}
                    </small>

                    {{-- TOMBOL BELI --}}
                    <form action="/cart/add/{{ $product->id }}" method="POST" class="mt-auto">
                        @csrf
                        <button class="btn btn-dark w-100"
                            {{ $product->stock == 0 ? 'disabled' : '' }}>
                            🛒 Tambah ke Keranjang
                        </button>
                    </form>
                </div>

            </div>
        </div>
        @empty
            <p>Tidak ada produk.</p>
        @endforelse
    </div>

    {{-- TOMBOL KE KERANJANG --}}
    <div class="text-end mt-4">
        <a href="/cart" class="btn btn-outline-dark">
            Lihat Keranjang →
        </a>
    </div>
</div>
@endsection
