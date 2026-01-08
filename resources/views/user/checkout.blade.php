@extends('layouts.main')

@section('title','Checkout')

@section('content')
<div class="container py-5">
    <h3 class="mb-4">Checkout</h3>

    <form method="POST" action="/checkout">
        @csrf

        <div class="mb-3">
            <label class="form-label">Metode Pembayaran</label>
            <select name="payment_method" id="paymentMethod" class="form-control">
                <option value="cash">Cash</option>
                <option value="qrcode">QR Code</option>
            </select>
        </div>

        {{-- QR CODE --}}
        <div id="qrSection" class="mb-4" style="display:none">
            <label class="form-label">Scan QR untuk Pembayaran</label>
            <div class="border rounded p-3 text-center bg-light">
                <img 
                    src="{{ asset('images/qrcode.png') }}" 
                    alt="QR Code"
                    style="max-width:200px"
                >
                <p class="text-muted mt-2">
                    Silakan scan QR di atas untuk melakukan pembayaran
                </p>
            </div>
        </div>

        <button class="btn btn-success w-100">
            Konfirmasi Checkout
        </button>
    </form>
</div>

<script>
    const paymentSelect = document.getElementById('paymentMethod');
    const qrSection = document.getElementById('qrSection');

    paymentSelect.addEventListener('change', function () {
        if (this.value === 'qrcode') {
            qrSection.style.display = 'block';
        } else {
            qrSection.style.display = 'none';
        }
    });
</script>
@endsection
