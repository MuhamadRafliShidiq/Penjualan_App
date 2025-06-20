<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Aplikasi Penjualan Barang' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Navbar lebih ramping */
    .navbar {
        padding-top: 0.8rem;
        padding-bottom: 0.8rem;
    }

    .navbar-nav .nav-link {
        color: #ffffff !important;
        margin: 0 10px;
        transition: color 0.3s ease;
        padding: 0.4rem 0.8rem;
        font-size: 0.95rem;
    }

    .navbar-nav .nav-link:hover {
        color: #ffc107 !important;
    }

    footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
    }

    .container {
        min-height: 60vh;
    }
</style>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/barang') }}">Penjualan Barang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/barang') }}">Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/pelanggan') }}">Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/penjualan') }}">Penjualan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center text-muted py-3 mt-4">
        <small>&copy; {{ date('Y') }}MuhamadRafliShidiq</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>