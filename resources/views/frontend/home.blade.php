@extends('frontend.layouts.app')

@section('title', 'Beranda - BBSPJIKKP')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @if ($heroImages->count() > 0)
                    @foreach ($heroImages as $index => $image)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="hero-slide"
                                style="background-image: url('{{ asset('storage/' . $image->image_path) }}');">
                                <div class="hero-overlay"></div>
                                <div class="container">
                                    <div class="row align-items-center" style="min-height: 100vh;">
                                        <div class="col-lg-8">
                                            <div class="hero-content text-white">
                                                <h1 class="hero-title mb-4 animate-fade-in">
                                                    BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, KARET DAN
                                                    PLASTIK
                                                </h1>
                                                <p class="hero-subtitle mb-4 animate-fade-in-delay">
                                                    Mewujudkan industri yang berdaya saing melalui standardisasi dan
                                                    pelayanan jasa yang berkualitas
                                                </p>
                                                <a href="#layanan" class="btn btn-primary btn-lg animate-fade-in-delay-2">
                                                    Selengkapnya
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="carousel-item active">
                        <div class="hero-slide" style="background-image: url('{{ asset('images/hero-default.jpg') }}');">
                            <div class="hero-overlay"></div>
                            <div class="container">
                                <div class="row align-items-center" style="min-height: 100vh;">
                                    <div class="col-lg-8">
                                        <div class="hero-content text-white">
                                            <h1 class="hero-title mb-4 animate-fade-in">
                                                BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, KARET DAN
                                                PLASTIK
                                            </h1>
                                            <p class="hero-subtitle mb-4 animate-fade-in-delay">
                                                Mewujudkan industri yang berdaya saing melalui standardisasi dan pelayanan
                                                jasa yang berkualitas
                                            </p>
                                            <a href="#layanan" class="btn btn-primary btn-lg animate-fade-in-delay-2">
                                                Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            @if ($heroImages->count() > 1)
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            @endif
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-content">
                        <div class="section-icon mb-4">
                            <i class="fas fa-cogs text-danger"></i>
                        </div>
                        <h2 class="section-title mb-4">Dari Pengujian ke Kepercayaan</h2>
                        <p class="section-description mb-4">
                            BBSPJIKKP berkomitmen untuk memberikan pelayanan terbaik dalam bidang standardisasi dan
                            pelayanan jasa industri.
                            Dengan pengalaman bertahun-tahun, kami telah menjadi mitra terpercaya bagi industri dalam
                            negeri.
                        </p>
                        <a href="#" class="btn btn-primary btn-lg">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset('images/about-building.jpg') }}" alt="Gedung BBSPJIKKP"
                            class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Info Section -->
    <section class="quick-info-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="info-card card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="info-icon mb-3">
                                <i class="fas fa-file-alt text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Standar Pelayanan</h5>
                            <p class="card-text text-muted">Informasi standar pelayanan yang kami berikan kepada masyarakat
                            </p>
                            <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="info-card card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="info-icon mb-3">
                                <i class="fas fa-calendar-alt text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Maklumat Pelayanan</h5>
                            <p class="card-text text-muted">Informasi lengkap tentang prosedur dan ketentuan pelayanan</p>
                            <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="info-card card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="info-icon mb-3">
                                <i class="fas fa-list-check text-primary" style="font-size: 3rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Tarif Layanan</h5>
                            <p class="card-text text-muted">Daftar tarif layanan yang transparan dan kompetitif</p>
                            <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="services-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title fw-bold">Layanan Kami</h2>
                    <p class="section-subtitle text-muted">Berbagai layanan profesional untuk mendukung industri Anda</p>
                </div>
            </div>

            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-card card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <div class="service-icon mb-3">
                                    <i class="{{ $service->icon }}" style="font-size: 3.5rem; color: #0d6efd;"></i>
                                </div>
                                <h5 class="service-title fw-bold mb-3">{{ $service->name }}</h5>
                                <p class="service-description text-muted">{{ $service->description }}</p>
                                <a href="{{ route('services.show', $service->slug) }}" class="btn btn-primary btn-sm">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-3 mb-lg-0">
                    <h3 class="cta-title mb-3 fw-bold">Ingin Mendaftar Layanan Jasa Industri?</h3>
                    <p class="cta-description mb-0">
                        Dapatkan layanan terbaik dari BBSPJIKKP untuk mendukung bisnis dan industri Anda.
                        Tim profesional kami siap membantu Anda.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <a href="#" class="btn btn-light btn-lg px-5">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="section-title fw-bold">Berita & Publikasi</h2>
                    <p class="section-subtitle text-muted">Informasi terbaru dan publikasi dari BBSPJIKKP</p>
                </div>
            </div>

            <div class="row">
                @if ($featuredNews->count() > 0)
                    <div class="col-lg-6 mb-4">
                        <div class="featured-news-card card border-0 shadow-sm h-100">
                            <div class="news-image" style="height: 300px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $featuredNews->first()->featured_image) }}"
                                    alt="{{ $featuredNews->first()->title }}" class="img-fluid w-100 h-100"
                                    style="object-fit: cover;">
                            </div>
                            <div class="news-content p-4">
                                <div class="news-meta mb-3">
                                    <span class="news-date text-muted me-3"><i
                                            class="far fa-calendar me-1"></i>{{ $featuredNews->first()->published_at->format('d M Y') }}</span>
                                    <span
                                        class="news-category badge bg-primary">{{ ucfirst($featuredNews->first()->type) }}</span>
                                </div>
                                <h4 class="news-title fw-bold mb-3">{{ $featuredNews->first()->title }}</h4>
                                <p class="news-excerpt text-muted">{{ $featuredNews->first()->excerpt }}</p>
                                <a href="{{ route('news.show', $featuredNews->first()->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="col-lg-6">
                    <div class="row">
                        @foreach ($latestNews->take(3) as $news)
                            <div class="col-12 mb-3">
                                <div class="news-item-card card border-0 shadow-sm">
                                    <div class="row g-0">
                                        <div class="col-4">
                                            <div class="news-thumbnail" style="height: 120px; overflow: hidden;">
                                                <img src="{{ asset('storage/' . $news->featured_image) }}"
                                                    alt="{{ $news->title }}" class="img-fluid w-100 h-100"
                                                    style="object-fit: cover;">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="news-content p-3">
                                                <div class="news-meta mb-2">
                                                    <span class="news-date text-muted small"><i
                                                            class="far fa-calendar me-1"></i>{{ $news->published_at->format('d M Y') }}</span>
                                                </div>
                                                <h6 class="news-title fw-bold mb-2">
                                                    <a href="{{ route('news.show', $news->slug) }}" class="text-decoration-none text-dark">
                                                        {{ Str::limit($news->title, 60) }}
                                                    </a>
                                                </h6>
                                                <a href="{{ route('news.show', $news->slug) }}" class="btn btn-sm btn-outline-primary">Baca
                                                    Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    @if ($partners->count() > 0)
        <section class="partners-section py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title fw-bold">Mitra Kami</h2>
                        <p class="section-subtitle text-muted">Organisasi dan perusahaan yang mempercayai layanan kami</p>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    @foreach ($partners as $partner)
                        <div class="col-lg-2 col-md-3 col-6 mb-4">
                            <div class="partner-logo text-center p-3 bg-white rounded shadow-sm">
                                <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}"
                                    class="img-fluid"
                                    style="max-height: 80px; filter: grayscale(100%); transition: all 0.3s;">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection

@push('styles')
    <style>
        /* Hero Section */
        .hero-section {
            min-height: 100vh;
        }

        .hero-slide {
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.2;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.95;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.7;
            transition: all 0.3s;
        }

        .carousel-control-prev {
            left: 30px;
        }

        .carousel-control-next {
            right: 30px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 1;
            background: rgba(255, 255, 255, 0.4);
        }

        /* About Section */
        .section-icon i {
            font-size: 4rem;
        }

        .section-title {
            font-size: 2.5rem;
            color: #2c3e50;
        }

        .section-subtitle {
            font-size: 1.1rem;
        }

        .section-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        /* Cards */
        .info-card,
        .service-card {
            transition: all 0.3s ease;
            border-radius: 15px;
        }

        .info-card:hover,
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
        }

        .service-icon {
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
        }

        /* News Cards */
        .featured-news-card,
        .news-item-card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .featured-news-card:hover,
        .news-item-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15) !important;
        }

        .featured-news-card:hover .news-image img {
            transform: scale(1.05);
        }

        .news-image img {
            transition: all 0.3s ease;
        }

        /* Partners */
        .partner-logo:hover img {
            filter: grayscale(0%) !important;
        }

        /* Animations */
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        .animate-fade-in-delay {
            animation: fadeIn 1s ease-in-out 0.3s both;
        }

        .animate-fade-in-delay-2 {
            animation: fadeIn 1s ease-in-out 0.6s both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 1.8rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .carousel-control-prev,
            .carousel-control-next {
                width: 40px;
                height: 40px;
            }

            .carousel-control-prev {
                left: 15px;
            }

            .carousel-control-next {
                right: 15px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.service-card, .info-card, .news-item-card').forEach(card => {
            observer.observe(card);
        });
    </script>
@endpush
