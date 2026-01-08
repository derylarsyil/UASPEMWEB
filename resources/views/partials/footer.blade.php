<footer class="footer bg-dark text-white mt-5">
    <div class="container py-4">
        <div class="row">

            <!-- ABOUT -->
            <div class="col-md-4">
                <h5>Furniture</h5>
                <p>
                    We provide high quality furniture with modern design
                    and affordable prices.
                </p>
            </div>

            <!-- LINKS -->
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="text-white text-decoration-none">About</a></li>
                    <li><a href="{{ url('/product') }}" class="text-white text-decoration-none">Product</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div class="col-md-4">
                <h5>Contact</h5>
                <p>Email: info@furniture.com</p>
                <p>Phone: +62 812-3456-7890</p>
            </div>

        </div>

        <hr class="border-secondary">

        <div class="text-center">
            <small>
                © {{ date('Y') }} Furniture. All Rights Reserved.
            </small>
        </div>
    </div>
</footer>
