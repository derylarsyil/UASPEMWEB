@extends('layouts.main')

@section('title','Detail Order')

@section('content')
<div class="container py-5">
    <h3>Detail Order #{{ $order->id }}</h3>

    <div class="mb-3">
        <strong>Nama User:</strong> {{ $order->user->name }} <br>
        <strong>Email:</strong> {{ $order->user->email }} <br>
        <strong>Metode Bayar:</strong> {{ strtoupper($order->payment_method) }} <br>
        <strong>Status:</strong> {{ ucfirst($order->status) }}
    </div>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td>{{ $item->product->name }}</td>
                <td>Rp {{ number_format($item->price) }}</td>
                <td>{{ $item->qty }}</td>
                <td>Rp {{ number_format($item->price * $item->qty) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h5 class="text-end">
        Total: Rp {{ number_format($order->total_price) }}
    </h5>

    <a href="/admin/orders" class="btn btn-secondary mt-3">
        ← Kembali
    </a>
</div>
@endsection
