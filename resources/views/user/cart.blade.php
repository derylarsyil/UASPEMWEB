@extends('layouts.main')

@section('title','Keranjang')

@section('content')
<div class="container py-5">

    <h3 class="mb-4">Keranjang Belanja</h3>

    @if($carts->count() == 0)
        <div class="alert alert-warning">
            Keranjang masih kosong
        </div>
        <a href="/product" class="btn btn-primary">
            Belanja Sekarang
        </a>
    @else

    <div class="table-responsive">
        <table class="table align-middle">
            <thead class="table-light">
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
            </thead>

            <tbody>
            @php $total = 0; @endphp

            @foreach($carts as $cart)
                @php
                    $subtotal = $cart->product->price * $cart->qty;
                    $total += $subtotal;
                @endphp
                <tr>
                    <td>
                        <div class="d-flex align-items-center gap-3">
                            @if($cart->product->image)
                                <img src="{{ asset('uploads/products/'.$cart->product->image) }}"
                                     width="70" class="rounded">
                            @else
                                <img src="https://via.placeholder.com/70"
                                     class="rounded">
                            @endif

                            <strong>{{ $cart->product->name }}</strong>
                        </div>
                    </td>

                    <td>Rp {{ number_format($cart->product->price) }}</td>

                    <td>{{ $cart->qty }}</td>

                    <td>Rp {{ number_format($subtotal) }}</td>
                </tr>
            @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th colspan="3" class="text-end">Total</th>
                    <th>Rp {{ number_format($total) }}</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="d-flex justify-content-end mt-3">
        <a href="/checkout" class="btn btn-dark px-4">
            Checkout
        </a>
    </div>

    @endif

</div>
@endsection
