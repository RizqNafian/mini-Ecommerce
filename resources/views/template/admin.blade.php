<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/js/dataTables.bootstrap5.js">
    {{-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> --}}
</head>
<body class="d-flex flex-column min-vh-100">
    {{-- Navbar --}}
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Admin Panel</a>
        </div>
    </nav>

    {{-- Content wrapper (grow to push footer down) --}}
    <div class="container-fluid flex-grow-1 mt-4">
        <div class="row">
            {{-- Sidebar --}}
            <div class="col-md-3 col-lg-2 bg-light p-3">
                <h5>Menu</h5>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ Route('produk') }}">Kelola Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Settings</a></li>
                </ul>
            </div>

            {{-- Main content --}}
            <main class="col-md-9 col-lg-10 px-md-4">
                <h1 class="mt-3">@yield('page-title')</h1>
                <hr>
                @yield('content')
            </main>
        </div>
    </div>

    {{-- Sticky Footer --}}
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <small>&copy; {{ date('Y') }} - Admin Panel</small>
    </footer>

    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.bootstrap5.js"></script>
    @stack('scripts')
</body>
</html>
