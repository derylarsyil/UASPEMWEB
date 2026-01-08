@extends('layouts.main')

@section('title','Pesanan Masuk')

@section('content')
<div class="container py-5">

    <h3 class="mb-4">Pesanan Masuk</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="d-flex justify-content-between mb-3">
    <h3>Pesanan Masuk</h3>

    <a href="/admin/orders/export" class="btn btn-success btn-sm">
        Export CSV
    </a>
</div>

    <table class="table table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama User</th>
                <th>Total</th>
                <th>Metode</th>
                <th>Status</th>
                <th width="120">Aksi</th>
            </tr>
        </thead>

        <tbody>
        @forelse($orders as $order)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $order->user->name }}</td>
                <td>Rp {{ number_format($order->total_price) }}</td>
                <td>{{ strtoupper($order->payment_method) }}</td>
                <td>
                    <span class="badge bg-warning">
                        {{ $order->status }}
                    </span>
                </td>
                <td>
                    <form action="/admin/orders/{{ $order->id }}" method="POST"
                          onsubmit="return confirm('Yakin hapus pesanan ini?')">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-muted">
                    Belum ada pesanan
                </td>
            </tr>
        @endforelse
        </tbody>

    </table>

</div>
@endsection
