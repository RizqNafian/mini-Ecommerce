<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Online')</title>

    {{-- Bootstrap / Tailwind / CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">TokoKu</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                {{-- Menu --}}
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Kontak</a></li>
                </ul>

                {{-- Search --}}
                {{-- <form class="d-flex me-3" action="" method="GET">
                    <input class="form-control me-2" type="search" name="q" placeholder="Cari produk..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </form> --}}

                {{-- Cart --}}
                <a href="{{ url('/keranjang') }}" class="btn btn-secondary">
                    🛒 Keranjang ({{ session('cart_count', 0) }})
                </a>

                {{-- Login / Logout --}}
                @auth
                    <a href="{{ url('/logout') }}" class="btn btn-primary ms-2">Logout</a>
                @else
                    <a href="{{ url('/login') }}" class="btn btn-primary ms-2">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="flex-grow-1">
        <div class="container py-4">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-light mt-auto py-4">
        <div class="container text-center">
            <p class="mb-1">&copy; {{ date('Y') }} - TokoKu</p>
            <p class="mb-0">
                <a href="" class="text-decoration-none text-light">Tentang Kami</a> | 
                <a href="" class="text-decoration-none text-light">Kontak</a>
            </p>
        </div>
    </footer>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
