@extends('layouts.main')

@section('title','Pesanan Masuk')

@section('content')
<div class="container py-5">
    <h3>Pesanan Masuk</h3>

    @forelse($orders as $order)
        <div class="card mb-3">
            <div class="card-body">

                <h5>
                    {{ $order->user->name }}
                    <small class="text-muted">({{ $order->payment_method }})</small>
                </h5>

                <p>Status: <strong>{{ $order->status }}</strong></p>

                <ul>
                    @foreach($order->items as $item)
                        <li>
                            {{ $item->product->name }}
                            ({{ $item->qty }} x Rp{{ number_format($item->price) }})
                        </li>
                    @endforeach
                </ul>

                <strong>Total: Rp{{ number_format($order->total_price) }}</strong>
            </div>
        </div>
    @empty
        <p class="text-muted">Belum ada pesanan.</p>
    @endforelse
</div>
@endsection
