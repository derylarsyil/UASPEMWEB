<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- LOGO / BRAND -->
        <a class="navbar-brand" href="{{ url('/') }}">
            Furniture
        </a>

        <!-- TOGGLE MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                       href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                       href="{{ url('/about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('product') ? 'active' : '' }}"
                       href="{{ url('/product') }}">Product</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                       href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
