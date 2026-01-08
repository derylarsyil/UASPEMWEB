@extends('layouts.main')

@section('title','Dashboard')

@section('content')
<div class="container py-5">

    <!-- HEADER -->
    <div class="text-center mb-5">
        <h2 class="mb-1">
            Halo, {{ auth()->user()->name }} 👋
        </h2>
        <p class="text-muted">
            Login sebagai <strong>{{ auth()->user()->role }}</strong>
        </p>
    </div>

    <!-- CARD MENU -->
    <div class="row justify-content-center g-4">

        {{-- ================= ADMIN ================= --}}
        @if(auth()->user()->role === 'admin')

            <div class="col-md-4">
                <div class="card p-4 h-100 text-center shadow-sm">
                    <div class="mb-3 fs-1">🛠️</div>
                    <h5>Kelola Produk</h5>
                    <p class="text-muted">
                        Tambah, edit, dan hapus produk furniture
                    </p>
                    <a href="/admin/product" class="btn btn-primary btn-sm mt-auto">
                        Manage Product
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 h-100 text-center shadow-sm">
                    <div class="mb-3 fs-1">📦</div>
                    <h5>Pesanan Masuk</h5>
                    <p class="text-muted">
                        Data checkout dari pelanggan
                    </p>
                    <a href="/admin/orders" class="btn btn-success btn-sm mt-auto">
                        Lihat Pesanan
                    </a>
                </div>
            </div>

        {{-- ================= USER ================= --}}
        @else

            <div class="col-md-4">
                <div class="card p-4 h-100 text-center shadow-sm">
                    <div class="mb-3 fs-1">🛍️</div>
                    <h5>Katalog Produk</h5>
                    <p class="text-muted">
                        Jelajahi furniture terbaik kami
                    </p>
                    <a href="/product" class="btn btn-success btn-sm mt-auto">
                        Lihat Produk
                    </a>
                </div>
            </div>

        @endif

    </div>

</div>
@endsection
