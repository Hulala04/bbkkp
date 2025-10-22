<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'BBSPJIKKP - Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet dan Plastik')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <!-- Header -->
    <header class="header">
        <!-- Top Bar -->
        <div class="top-bar bg-primary text-white py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">

                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="language-selector me-3">
                                <i class="fas fa-globe me-1"></i>
                                <span>English</span>
                            </div>
                            <a href="#" class="btn btn-outline-light btn-sm me-2">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <div class="logo-icon me-3">
                        <img src="{{ asset('images/logobalai.png') }}" alt="BBSPJKKPP Logo"
                            style="height: 50px; width: auto;">
                    </div>
                    <div class="logo-text">
                        <h4 class="mb-0 text-primary fw-bold">BBSPJIKKP</h4>
                        <small class="text-muted">Balai Besar Standardisasi</small>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button"
                                data-bs-toggle="dropdown">
                                Layanan
                            </a>
                            <div class="dropdown-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        @if (isset($services) && $services->count() > 0)
                                            @foreach ($services as $service)
                                                <div class="col-md-4">
                                                    <div class="dropdown-item-group">
                                                        <h6 class="dropdown-header">
                                                            <i class="{{ $service->icon }} me-2"></i>
                                                            {{ $service->name }}
                                                        </h6>
                                                        @if ($service->children->count() > 0)
                                                            @foreach ($service->children as $child)
                                                                <a class="dropdown-item"
                                                                    href="{{ route('services.show', $child->slug) }}">
                                                                    {{ $child->name }}
                                                                </a>
                                                            @endforeach
                                                        @else
                                                            <a class="dropdown-item"
                                                                href="{{ route('services.show', $service->slug) }}">
                                                                Lihat Detail
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-12">
                                                <div class="dropdown-item-group">
                                                    <h6 class="dropdown-header">Layanan</h6>
                                                    <a class="dropdown-item" href="{{ route('services.index') }}">Lihat
                                                        Semua Layanan</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="standarDropdown" role="button"
                                data-bs-toggle="dropdown">
                                Standar Pelayanan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Standar Pelayanan</a></li>
                                <li><a class="dropdown-item" href="#">Maklumat Pelayanan</a></li>
                                <li><a class="dropdown-item" href="#">Tarif Layanan</a></li>
                                <li><a class="dropdown-item" href="#">Tarif Percepatan</a></li>
                                <li><a class="dropdown-item" href="#">SPM</a></li>
                                <li><a class="dropdown-item" href="#">Survey Layanan Pelanggan</a></li>
                                <li><a class="dropdown-item" href="#">IKM</a></li>
                                <li><a class="dropdown-item" href="#">Kontak</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown" role="button"
                                data-bs-toggle="dropdown">
                                Media & Informasi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Keterbukaan Informasi Publik</a></li>
                                <li><a class="dropdown-item" href="#">BBSPJIKKP News</a></li>
                                <li><a class="dropdown-item" href="#">Publikasi</a></li>
                                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="tentangDropdown" role="button"
                                data-bs-toggle="dropdown">
                                Tentang Kami
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Tonggak Sejarah</a></li>
                                <li><a class="dropdown-item" href="#">Profil Singkat</a></li>
                                <li><a class="dropdown-item" href="#">Profil Pejabat</a></li>
                                <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                                <li><a class="dropdown-item" href="#">Makna Logo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Halal Center</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar Layanan</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-brand">
                        <div class="d-flex align-items-center mb-3">
                            <div class="logo-icon me-3">
                                <img src="{{ asset('images/logo-balai.png') }}" alt="BBSPJKKPP Logo"
                                    style="height: 40px; width: auto;">
                            </div>
                            <div class="logo-text">
                                <h5 class="mb-0 text-primary fw-bold">BBSPJIKKP</h5>
                                <small>Balai Besar Standardisasi</small>
                            </div>
                        </div>
                        <p class="text-light">
                            Jl. Raya Bogor KM. 47, Cimanggis, Depok<br>
                            Jawa Barat 16452
                        </p>
                        <div class="contact-info">
                            <p class="mb-1"><i class="fas fa-phone me-2"></i> +62 21 1234 5678</p>
                            <p class="mb-1"><i class="fas fa-envelope me-2"></i> info@bbkkp.com</p>
                            <p class="mb-0"><i class="fas fa-clock me-2"></i> Senin - Jumat: 08:00 - 16:00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-primary mb-3">Menu</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Beranda</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Tentang Kami</a></li>
                        <li><a href="{{ route('services.index') }}"
                                class="text-light text-decoration-none">Layanan</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Media & Informasi</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Halal Center</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-primary mb-3">Layanan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Pengujian</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Kalibrasi</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Sertifikasi</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Bimbingan Teknis</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Inspeksi</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Verifikasi & Validasi</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Uji Profisiensi</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Pelatihan Teknis</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Produsen Bahan Acuan</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Edukasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-primary mb-3">Informasi</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Standar Pelayanan</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Maklumat Pelayanan</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Tarif Layanan</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Tarif Percepatan</a></li>
                        <li><a href="#" class="text-light text-decoration-none">SPM</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Survey Layanan Pelanggan</a>
                        </li>
                        <li><a href="#" class="text-light text-decoration-none">IKM</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
            </div>

            <hr class="my-4">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 BBSPJIKKP. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/frontend.js') }}"></script>

    @stack('scripts')
</body>

</html>
