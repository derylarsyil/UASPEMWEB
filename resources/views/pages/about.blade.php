@extends('layouts.main')

@section('title','About Us')

@section('content')

<!-- HERO ABOUT -->
<section class="py-5 text-white" style="background:linear-gradient(120deg,#2c2c2c,#111)">
    <div class="container text-center">
        <h1 class="fw-bold mb-3">Tentang Furniture Kami</h1>
        <p class="lead text-light">
            Menghadirkan furnitur modern, berkualitas, dan nyaman untuk setiap ruang hidup Anda.
        </p>
    </div>
</section>

<!-- ABOUT CONTENT -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <img 
                    src="https://images.unsplash.com/photo-1618220179428-22790b461013"
                    class="img-fluid rounded shadow"
                    alt="Furniture"
                >
            </div>

            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Siapa Kami?</h2>
                <p class="text-muted">
                    Kami adalah penyedia furnitur yang berfokus pada desain modern, kualitas tinggi,
                    dan harga yang terjangkau. Setiap produk dibuat dengan perhatian pada detail,
                    kenyamanan, dan estetika.
                </p>

                <p class="text-muted">
                    Dengan pengalaman dan dedikasi, kami membantu menciptakan ruang yang nyaman,
                    fungsional, dan mencerminkan gaya hidup Anda.
                </p>

                <ul class="list-unstyled mt-4">
                    <li>✔ Material berkualitas tinggi</li>
                    <li>✔ Desain modern & minimalis</li>
                    <li>✔ Harga kompetitif</li>
                    <li>✔ Stok selalu update</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- VALUES -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 border-0 shadow-sm">
                    <h4 class="fw-bold">Quality</h4>
                    <p class="text-muted">
                        Kami mengutamakan kualitas agar produk tahan lama dan nyaman digunakan.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 border-0 shadow-sm">
                    <h4 class="fw-bold">Design</h4>
                    <p class="text-muted">
                        Desain modern dan elegan yang cocok untuk rumah dan kantor.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 border-0 shadow-sm">
                    <h4 class="fw-bold">Trust</h4>
                    <p class="text-muted">
                        Kepercayaan pelanggan adalah prioritas utama kami.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
