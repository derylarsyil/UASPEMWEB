@extends('layouts.main')

@section('title','Contact')

@section('content')

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <h3 class="text-center mb-4">Contact Us</h3>

                    <form>
                        <div class="mb-3">
                            <input class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-dark w-100">
                            Send Message
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
