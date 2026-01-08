<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Furniture')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            transition: background-color .3s, color .3s;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,.05);
        }

        body.dark-mode {
            background-color: #121212;
            color: #eaeaea;
        }

        body.dark-mode .navbar,
        body.dark-mode footer {
            background-color: #1a1a1a !important;
        }

        body.dark-mode .card {
            background-color: #1e1e1e;
            color: #eaeaea;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/home">Furniture</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/product" class="nav-link">Product</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>

                <!-- DARK MODE -->
                <li class="nav-item ms-3">
                    <button id="themeToggle" class="btn btn-outline-light btn-sm">🌙</button>
                </li>

                <!-- LOGOUT -->
                <li class="nav-item ms-2">
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="btn btn-danger btn-sm">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<main class="container my-5">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    © {{ date('Y') }} Furniture Project
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const toggle = document.getElementById('themeToggle');
    const body = document.body;

    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark-mode');
        toggle.innerText = '☀️';
    }

    toggle.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        localStorage.setItem('theme',
            body.classList.contains('dark-mode') ? 'dark' : 'light'
        );
        toggle.innerText = body.classList.contains('dark-mode') ? '☀️' : '🌙';
    });
</script>

</body>
</html>
