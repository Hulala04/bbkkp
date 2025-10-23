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



    <style>
        /* === Dropdown Menu Sederhana untuk Semua Menu === */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            opacity: 0;
            visibility: hidden;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease;
            z-index: 1000;
            border: 1px solid #e9ecef;
            min-width: 200px;
        }

        /* Mega menu khusus untuk Layanan */
        .mega-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%, 0);
            opacity: 0;
            visibility: hidden;
            min-width: 1000px;
            max-width: 1200px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease;
            z-index: 1000;
            border: 1px solid #e9ecef;
        }

        /* Saat diklik, menu muncul langsung */
        .dropdown-menu.show,
        .mega-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translate(0, 0);
        }

        .mega-menu.show {
            transform: translate(-50%, 0);
        }

        /* Supaya klik di luar menutup dropdown */
        .nav-item.dropdown {
            position: relative;
        }

        /* Dropdown Menu Styling */
        .dropdown-menu {
            padding: 20px 0;
            margin-top: 5px;
        }

        .mega-menu {
            padding: 15px;
            margin-top: 10px;
        }

        .dropdown-item {
            padding: 8px 20px;
            transition: all 0.2s ease;
            font-size: 14px;
            color: #495057;
            display: block;
            text-decoration: none;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
        }

        .dropdown-item:hover {
            background-color: rgba(13, 110, 253, 0.08);
            color: #0d6efd;
            text-decoration: none;
        }

        /* Mega Menu Styling - Kompak dan Rapi */
        .dropdown-item-group {
            padding: 12px;
            border-radius: 6px;
            transition: background-color 0.2s ease;
            margin-bottom: 8px;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
        }

        .dropdown-item-group:hover {
            background-color: #ffffff;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        .dropdown-header {
            font-size: 13px;
            font-weight: 600;
            color: #0d6efd;
            padding: 6px 0;
            border-bottom: 1px solid #e3f2fd;
            margin-bottom: 8px;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dropdown-item {
            padding: 6px 10px;
            transition: all 0.2s ease;
            font-size: 12px;
            color: #495057;
            white-space: nowrap;
            display: block;
            text-decoration: none;
            margin-bottom: 4px;
            border-radius: 4px;
        }

        .dropdown-item:hover {
            background-color: rgba(13, 110, 253, 0.08);
            color: #0d6efd;
            text-decoration: none;
        }

        /* Hover effect untuk nav link */
        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #0d6efd;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        /* Responsive improvements */
        @media (max-width: 1200px) {
            .mega-menu {
                min-width: 800px;
                left: 0;
                transform: translate(0, 0);
            }

            .mega-menu.show {
                transform: translate(0, 0);
            }
        }

        @media (max-width: 768px) {
            .mega-menu {
                min-width: 100%;
                left: 0;
                right: 0;
                transform: translate(0, 0);
                padding: 20px;
            }

            .mega-menu.show {
                transform: translate(0, 0);
            }

            .dropdown-menu {
                min-width: 100%;
                left: 0;
                right: 0;
            }

            .dropdown-item-group {
                padding: 8px;
                margin-bottom: 6px;
            }

            .dropdown-header {
                font-size: 12px;
                margin-bottom: 6px;
            }

            .dropdown-item {
                padding: 4px 8px;
                font-size: 11px;
                margin-bottom: 3px;
            }
        }
    </style>

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
                            <!-- Logo di Top Bar -->
                            <img src="{{ asset('images/logo.png') }}" alt="BBSPJIKKP Logo"
                                style="height: 35px; margin-right: 15px;">
                            <span class="fw-semibold">BBSPJIKKP</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="d-flex align-items-center justify-content-end gap-3">
                            <!-- Language Selector -->
                            <div class="language-selector dropdown">
                                <button class="btn btn-link text-white text-decoration-none dropdown-toggle p-0"
                                    type="button" id="languageDropdown" data-bs-toggle="dropdown">
                                    <i class="fas fa-globe me-1"></i>
                                    <span id="currentLang">{{ app()->getLocale() == 'id' ? 'ID' : 'English' }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('id')"><img
                                                src="{{ asset('images/flag-id.png') }}" alt="ID"
                                                style="width: 20px; margin-right: 8px;">Indonesia</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')"><img
                                                src="{{ asset('images/flag-en.png') }}" alt="EN"
                                                style="width: 20px; margin-right: 8px;">English</a></li>
                                </ul>
                            </div>

                            <!-- Hubungi Kami Button -->
                            <a href="#" class="btn btn-outline-light btn-sm rounded-pill px-4">
                                <i class="fas fa-phone me-2"></i>
                                <span id="contactText">Hubungi Kami</span>
                            </a>
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
                        <i class="fas fa-cogs text-primary"></i>
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
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                                {{ __('Beranda') }}
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button"
                                data-bs-toggle="dropdown">
                                {{ __('Layanan') }}
                            </a>
                            <div class="dropdown-menu mega-menu" style="min-width: 700px;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="dropdown-item-group">
                                                <h6 class="dropdown-header">
                                                    <i class="fas fa-flask me-2"></i>{{ __('Pengujian') }}
                                                </h6>
                                                <a class="dropdown-item" href="#">{{ __('Lihat Detail') }}</a>
                                            </div>
                                            <div class="dropdown-item-group mt-2">
                                                <h6 class="dropdown-header">
                                                    <i class="fas fa-cog me-2"></i>{{ __('Kalibrasi') }}
                                                </h6>
                                                <a class="dropdown-item" href="#">{{ __('Lihat Detail') }}</a>
                                            </div>
                                            <div class="dropdown-item-group mt-2">
                                                <h6 class="dropdown-header">
                                                    <i class="fas fa-check-circle me-2"></i>{{ __('Inspeksi') }}
                                                </h6>
                                                <a class="dropdown-item" href="#">{{ __('Lihat Detail') }}</a>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="dropdown-item-group">
                                                <h6 class="dropdown-header">
                                                    <i class="fas fa-certificate me-2"></i>{{ __('Sertifikasi') }}
                                                </h6>
                                                <a class="dropdown-item"
                                                    href="#">{{ __('Sertifikasi Produk (SPPT SNI)') }}</a>
                                                <a class="dropdown-item" href="#">SMM</a>
                                                <a class="dropdown-item" href="#">SMK3</a>
                                                <a class="dropdown-item" href="#">SML</a>
                                                <a class="dropdown-item" href="#">SIH</a>
                                                <a class="dropdown-item"
                                                    href="#">{{ __('Sertifikasi Personil') }}</a>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="dropdown-item-group">
                                                <h6 class="dropdown-header">
                                                    <i
                                                        class="fas fa-chalkboard-teacher me-2"></i>{{ __('Bimbingan Teknis / Konsultansi') }}
                                                </h6>
                                                <a class="dropdown-item"
                                                    href="#">{{ __('Audit Teknologi') }}</a>
                                                <a class="dropdown-item" href="#">INDI 4.0</a>
                                                <a class="dropdown-item" href="#">TKDN</a>
                                                <a class="dropdown-item"
                                                    href="#">{{ __('Sistem Manajemen (SNI/ISO)') }}</a>
                                                <a class="dropdown-item"
                                                    href="#">{{ __('Penyusunan Dokumen') }}</a>
                                            </div>

                                            <div class="dropdown-item-group mt-2">
                                                <h6 class="dropdown-header">
                                                    <i
                                                        class="fas fa-check-double me-2"></i>{{ __('Verifikasi dan Validasi') }}
                                                </h6>
                                                <a class="dropdown-item" href="#">GRK</a>
                                                <a class="dropdown-item" href="#">TKDN</a>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="dropdown-item-group">
                                                <h6 class="dropdown-header">
                                                    <i class="fas fa-chart-line me-2"></i>{{ __('Uji Profisiensi') }}
                                                </h6>
                                                <a class="dropdown-item" href="#">{{ __('Kalibrasi') }}</a>
                                                <a class="dropdown-item" href="#">{{ __('Pengujian') }}</a>
                                            </div>

                                            <div class="dropdown-item-group mt-2">
                                                <h6 class="dropdown-header">
                                                    <i
                                                        class="fas fa-graduation-cap me-2"></i>{{ __('Pelatihan Teknis') }}
                                                </h6>
                                                <a class="dropdown-item" href="#">{{ __('Lihat Detail') }}</a>
                                            </div>

                                            <div class="dropdown-item-group mt-2">
                                                <h6 class="dropdown-header">
                                                    <i
                                                        class="fas fa-industry me-2"></i>{{ __('Produsen Bahan Acuan') }}
                                                </h6>
                                                <a class="dropdown-item" href="#">{{ __('Lihat Detail') }}</a>
                                            </div>

                                            <div class="dropdown-item-group mt-2">
                                                <h6 class="dropdown-header">
                                                    <i class="fas fa-book me-2"></i>{{ __('Edukasi') }}
                                                </h6>
                                                <a class="dropdown-item" href="#">{{ __('Magang / PKL') }}</a>
                                                <a class="dropdown-item" href="#">{{ __('Kunjungan') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="standarDropdown" role="button"
                                data-bs-toggle="dropdown">
                                {{ __('Standar Pelayanan') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-file-contract me-2"></i>{{ __('Standar Pelayanan') }}</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-bullhorn me-2"></i>{{ __('Maklumat Pelayanan') }}</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-dollar-sign me-2"></i>{{ __('Tarif Layanan') }}</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-fast-forward me-2"></i>{{ __('Tarif Percepatan') }}</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-chart-bar me-2"></i>{{ __('Standar Pelayanan Minimum (SPM)') }}</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-poll me-2"></i>{{ __('Survey Layanan Pelanggan') }}</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-smile me-2"></i>{{ __('Indeks Kepuasan Masyarakat') }}</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-phone-alt me-2"></i>{{ __('Kontak') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown" role="button"
                                data-bs-toggle="dropdown">
                                {{ __('Media & Informasi') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-info-circle me-2"></i>{{ __('Keterbukaan Informasi Publik') }}</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('news.index') }}"><i
                                            class="fas fa-newspaper me-2"></i>BBSPJIKKP News</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-book-open me-2"></i>{{ __('Publikasi') }}</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-bell me-2"></i>{{ __('Pengumuman') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="tentangDropdown" role="button"
                                data-bs-toggle="dropdown">
                                {{ __('Tentang Kami') }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-history me-2"></i>{{ __('Tonggak Sejarah') }}</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-building me-2"></i>{{ __('Profil Singkat BBSPJIKKP') }}</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-user-tie me-2"></i>{{ __('Profil Pejabat') }}</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-sitemap me-2"></i>{{ __('Struktur Organisasi') }}</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-shield-alt me-2"></i>{{ __('Makna Logo') }}</a></li>
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
                                <i class="fas fa-cogs text-primary"></i>
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
                            <p class="mb-0"><i class="fas fa-clock me-2"></i>
                                {{ __('Senin - Jumat: 08:00 - 16:00') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-primary mb-3">{{ __('Menu') }}</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}"
                                class="text-light text-decoration-none">{{ __('Beranda') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Tentang Kami') }}</a>
                        </li>
                        <li><a href="{{ route('services.index') }}"
                                class="text-light text-decoration-none">{{ __('Layanan') }}</a></li>
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Media & Informasi') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Halal Center</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-primary mb-3">{{ __('Layanan') }}</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Pengujian') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Kalibrasi') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Sertifikasi') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Bimbingan Teknis') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Inspeksi') }}</a></li>
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Verifikasi & Validasi') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Uji Profisiensi') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Pelatihan Teknis') }}</a></li>
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Produsen Bahan Acuan') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Edukasi') }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="text-primary mb-3">{{ __('Informasi') }}</h6>
                    <ul class="list-unstyled">
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Standar Pelayanan') }}</a></li>
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Maklumat Pelayanan') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Tarif Layanan') }}</a>
                        </li>
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Tarif Percepatan') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">SPM</a></li>
                        <li><a href="#"
                                class="text-light text-decoration-none">{{ __('Survey Layanan Pelanggan') }}</a></li>
                        <li><a href="#" class="text-light text-decoration-none">IKM</a></li>
                        <li><a href="#" class="text-light text-decoration-none">{{ __('Kontak') }}</a></li>
                    </ul>
                </div>
            </div>

            <hr class="my-4">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 BBSPJIKKP. {{ __('All rights reserved.') }}</p>
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

    <script>
        // Language Switcher
        function changeLanguage(lang) {
            // Simpan ke localStorage
            localStorage.setItem('language', lang);

            // Update tampilan bahasa
            const currentLangText = lang === 'id' ? 'ID' : 'English';
            document.getElementById('currentLang').textContent = currentLangText;

            // Update text Hubungi Kami
            const contactText = lang === 'id' ? 'Hubungi Kami' : 'Contact Us';
            document.getElementById('contactText').textContent = contactText;

            // Kirim request ke server untuk ganti bahasa
            fetch(`/language/${lang}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            }).then(() => {
                // Reload halaman
                location.reload();
            });
        }

        // Load bahasa dari localStorage saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            const savedLang = localStorage.getItem('language') || 'id';
            const currentLangText = savedLang === 'id' ? 'ID' : 'English';
            document.getElementById('currentLang').textContent = currentLangText;
        });
    </script>

    @stack('scripts')
</body>

</html>
