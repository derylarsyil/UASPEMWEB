@extends('layouts.auth')

@section('title','Register')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card p-4">
                <h4 class="text-center mb-3">Daftar Akun</h4>

                <form method="POST" action="/register">
                    @csrf

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <button class="btn btn-dark w-100">Daftar</button>
                </form>

                <p class="text-center mt-3">
                    Sudah punya akun?
                    <a href="/login">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
