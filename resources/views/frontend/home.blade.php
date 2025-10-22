@extends('frontend.layouts.app')

@section('title', 'Beranda - BBSPJIKKP')

@section('content')
<!-- Hero Section -->
<section class="hero-section position-relative">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @if($heroImages->count() > 0)
                @foreach($heroImages as $index => $image)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="hero-slide" style="background-image: url('{{ asset('storage/' . $image->image_path) }}');">
                        <div class="hero-overlay"></div>
                        <div class="container">
                            <div class="row align-items-center min-vh-100">
                                <div class="col-lg-6">
                                    <div class="hero-content text-white">
                                        <h1 class="hero-title mb-4 animate-fade-in">
                                            BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, KARET DAN PLASTIK
                                        </h1>
                                        <p class="hero-subtitle mb-4 animate-fade-in-delay">
                                            Mewujudkan industri yang berdaya saing melalui standardisasi dan pelayanan jasa yang berkualitas
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
                            <div class="row align-items-center min-vh-100">
                                <div class="col-lg-6">
                                    <div class="hero-content text-white">
                                        <h1 class="hero-title mb-4 animate-fade-in">
                                            BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, KARET DAN PLASTIK
                                        </h1>
                                        <p class="hero-subtitle mb-4 animate-fade-in-delay">
                                            Mewujudkan industri yang berdaya saing melalui standardisasi dan pelayanan jasa yang berkualitas
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
        
        @if($heroImages->count() > 1)
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
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content">
                    <div class="about-layout">
                        <!-- Logo on the left -->
                        <div class="about-logo-section">
                            <div class="about-logo">
                                <img src="{{ asset('images/balai-logo.png') }}" alt="BBSPJKKPP Logo" style="width: 374px; height: 356px;">
                            </div>
                            <!-- Profile button below logo -->
                            <div class="about-actions">
                                <a href="#" class="btn btn-primary btn-lg">Profil BBKKP</a>
                            </div>
                        </div>
                        
                        <!-- Text content on the right -->
                        <div class="about-text-section">
                            <h2 class="section-title mb-3">Dari Pengujian ke Kepercayaan</h2>
                            <h3 class="section-subtitle mb-4">
                                Menjaga Mutu, Mendukung Daya Saing <span class="text-danger">Industri</span>
                            </h3>
                            
                            <!-- Mission Statement -->
                            <p class="section-description">
                                Menjadi balai besar yang akuntabel, kolaboratif dan berorientasi pelayanan dalam mewujudkan industri nasional bidang kulit, karet, dan plastik yang mandiri dan berdaya saing.
                            </p>
                        </div>
                    </div>
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
                <div class="info-card h-100">
                    <div class="card-body text-center">
                        <div class="info-icon mb-3">
                            <i class="fas fa-file-alt text-primary"></i>
                        </div>
                        <h5 class="card-title">Standar Pelayanan</h5>
                        <p class="card-text">Informasi standar pelayanan yang kami berikan kepada masyarakat</p>
                        <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="info-card h-100">
                    <div class="card-body text-center">
                        <div class="info-icon mb-3">
                            <i class="fas fa-calendar-alt text-primary"></i>
                        </div>
                        <h5 class="card-title">Maklumat Pelayanan</h5>
                        <p class="card-text">Informasi lengkap tentang prosedur dan ketentuan pelayanan</p>
                        <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="info-card h-100">
                    <div class="card-body text-center">
                        <div class="info-icon mb-3">
                            <i class="fas fa-list-check text-primary"></i>
                        </div>
                        <h5 class="card-title">Tarif Layanan</h5>
                        <p class="card-text">Daftar tarif layanan yang transparan dan kompetitif</p>
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
                <h2 class="section-title">Layanan Kami</h2>
                <p class="section-subtitle">Berbagai layanan profesional untuk mendukung industri Anda</p>
            </div>
        </div>
        
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-body text-center">
                        <div class="service-icon mb-3">
                            <i class="{{ $service->icon }}"></i>
                        </div>
                        <h5 class="service-title">{{ $service->name }}</h5>
                        <p class="service-description">{{ $service->description }}</p>
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
            <div class="col-lg-8">
                <h3 class="cta-title mb-3">Ingin Mendaftar Layanan Jasa Industri?</h3>
                <p class="cta-description mb-0">
                    Dapatkan layanan terbaik dari BBSPJIKKP untuk mendukung bisnis dan industri Anda. 
                    Tim profesional kami siap membantu Anda.
                </p>
            </div>
            <div class="col-lg-4 text-end">
                <a href="#" class="btn btn-light btn-lg">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Berita & Publikasi</h2>
                <p class="section-subtitle">Informasi terbaru dan publikasi dari BBSPJIKKP</p>
            </div>
        </div>
        
        <div class="row">
            @if($featuredNews->count() > 0)
            <div class="col-lg-6 mb-4">
                <div class="featured-news-card">
                    <div class="news-image">
                        <img src="{{ asset('storage/' . $featuredNews->first()->featured_image) }}" alt="{{ $featuredNews->first()->title }}" class="img-fluid">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">{{ $featuredNews->first()->published_at->format('d M Y') }}</span>
                            <span class="news-category">{{ ucfirst($featuredNews->first()->type) }}</span>
                        </div>
                        <h4 class="news-title">{{ $featuredNews->first()->title }}</h4>
                        <p class="news-excerpt">{{ $featuredNews->first()->excerpt }}</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endif
            
            <div class="col-lg-6">
                <div class="row">
                    @foreach($latestNews->take(3) as $news)
                    <div class="col-12 mb-3">
                        <div class="news-item-card">
                            <div class="row">
                                <div class="col-4">
                                    <div class="news-thumbnail">
                                        <img src="{{ asset('storage/' . $news->featured_image) }}" alt="{{ $news->title }}" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="news-content">
                                        <div class="news-meta">
                                            <span class="news-date">{{ $news->published_at->format('d M Y') }}</span>
                                        </div>
                                        <h6 class="news-title">{{ $news->title }}</h6>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
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
@if($partners->count() > 0)
<section class="partners-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Mitra Kami</h2>
                <p class="section-subtitle">Organisasi dan perusahaan yang mempercayai layanan kami</p>
            </div>
        </div>
        
        <div class="row align-items-center">
            @foreach($partners as $partner)
            <div class="col-lg-2 col-md-3 col-6 mb-4">
                <div class="partner-logo text-center">
                    <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}" class="img-fluid">
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
    background: rgba(0, 0, 0, 0.5);
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: 2.5rem;
    font-weight: 700;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    line-height: 1.2;
}

.section-subtitle {
    color: #2c3e50;
    font-size: 1.3rem;
    font-weight: 500;
    line-height: 1.3;
}

.about-layout {
    display: flex;
    align-items: flex-start;
    gap: 2rem;
}

.about-logo-section {
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 374px;
}

.about-logo {
    display: flex;
    align-items: center;
    margin-top: 2rem;
}

.about-text-section {
    flex: 1;
    min-width: 0;
    margin-left: -1rem;
    padding-left: 1rem;
    margin-top: 5rem;
}

.section-description {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #495057;
    margin: 0;
}

.about-actions .btn {
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 25px;
    transition: all 0.3s ease;
}

.about-actions .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
}

.about-actions {
    margin-top: 10rem;
}



.service-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.service-icon {
    font-size: 3rem;
    color: #007bff;
}

.info-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.info-card:hover {
    transform: translateY(-3px);
}

.info-icon {
    font-size: 2.5rem;
}

.news-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.news-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.partner-logo img {
    max-height: 80px;
    filter: grayscale(100%);
    transition: filter 0.3s ease;
}

.partner-logo:hover img {
    filter: grayscale(0%);
}

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

.cta-section {
    background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
}

.cta-title {
    font-size: 1.8rem;
    font-weight: 600;
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 1.8rem;
    }
    
    .hero-subtitle {
        font-size: 1rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    .about-layout {
        flex-direction: column;
        gap: 1.5rem;
    }
    
    .about-logo-section {
        align-items: center;
        text-align: center;
        width: 100%;
    }
    
    .about-logo img {
        width: 200px !important;
        height: auto !important;
        max-width: 100%;
    }
    
    .about-text-section {
        text-align: center;
        margin-left: 0;
        padding-left: 0;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
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

// Add animation on scroll
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

// Observe all service cards and info cards
document.querySelectorAll('.service-card, .info-card, .news-card').forEach(card => {
    observer.observe(card);
});
</script>
@endpush