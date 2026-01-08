@extends('layouts.auth')

@section('title','Login')

@section('content')
<div class="card p-4" style="width:350px">
    <h4 class="text-center mb-3">Login</h4>

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button class="btn btn-dark w-100">Login</button>
    </form>

    <p class="text-center mt-3">
        Belum punya akun? <a href="/register">Daftar</a>
    </p>
</div>
@endsection
