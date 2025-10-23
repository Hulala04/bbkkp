@extends('frontend.layouts.app')

@section('title', $news->title)

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <article class="news-article">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Berita</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($news->title, 50) }}</li>
                        </ol>
                    </nav>

                    <!-- News Header -->
                    <header class="news-header mb-4">
                        <div class="news-meta mb-3">
                            <span class="news-date text-muted me-3">
                                <i class="far fa-calendar me-1"></i>{{ $news->published_at->format('d M Y') }}
                            </span>
                            <span class="news-category badge bg-primary">{{ ucfirst($news->type) }}</span>
                        </div>
                        <h1 class="news-title fw-bold mb-3">{{ $news->title }}</h1>
                        @if ($news->excerpt)
                            <p class="news-excerpt lead text-muted">{{ $news->excerpt }}</p>
                        @endif
                    </header>

                    <!-- Featured Image -->
                    @if ($news->featured_image)
                        <div class="news-featured-image mb-4">
                            <img src="{{ asset('storage/' . $news->featured_image) }}" alt="{{ $news->title }}"
                                class="img-fluid rounded">
                        </div>
                    @endif

                    <!-- News Content -->
                    <div class="news-content">
                        {!! $news->content !!}
                    </div>

                    <!-- Share Buttons -->
                    <div class="news-share mt-5 pt-4 border-top">
                        <h6 class="fw-bold mb-3">Bagikan:</h6>
                        <div class="share-buttons">
                            <a href="#" class="btn btn-outline-primary btn-sm me-2">
                                <i class="fab fa-facebook-f me-1"></i>Facebook
                            </a>
                            <a href="#" class="btn btn-outline-info btn-sm me-2">
                                <i class="fab fa-twitter me-1"></i>Twitter
                            </a>
                            <a href="#" class="btn btn-outline-success btn-sm me-2">
                                <i class="fab fa-whatsapp me-1"></i>WhatsApp
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="news-sidebar">
                    <!-- Related News -->
                    @if ($relatedNews->count() > 0)
                        <div class="sidebar-widget mb-4">
                            <h5 class="widget-title fw-bold mb-3">Berita Terkait</h5>
                            <div class="related-news">
                                @foreach ($relatedNews as $related)
                                    <div class="related-news-item mb-3">
                                        <div class="row g-2">
                                            <div class="col-4">
                                                <div class="related-thumbnail" style="height: 80px; overflow: hidden;">
                                                    <img src="{{ asset('storage/' . $related->featured_image) }}"
                                                        alt="{{ $related->title }}" class="img-fluid w-100 h-100"
                                                        style="object-fit: cover;">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="related-title fw-bold mb-1">
                                                    <a href="{{ route('news.show', $related->slug) }}"
                                                        class="text-decoration-none text-dark">
                                                        {{ Str::limit($related->title, 60) }}
                                                    </a>
                                                </h6>
                                                <small
                                                    class="text-muted">{{ $related->published_at->format('d M Y') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Back to News -->
                    <div class="sidebar-widget">
                        <a href="{{ route('news.index') }}" class="btn btn-outline-primary w-100">
                            <i class="fas fa-arrow-left me-2"></i>Kembali ke Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
