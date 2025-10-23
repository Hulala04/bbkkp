@extends('frontend.layouts.app')

@section('title', 'Berita & Publikasi')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <div class="page-header text-center mb-5">
                    <h1 class="page-title fw-bold">Berita & Publikasi</h1>
                    <p class="page-subtitle text-muted">Informasi terbaru dan publikasi dari BBSPJIKKP</p>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse ($news as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="news-card card border-0 shadow-sm h-100">
                        <div class="news-image" style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $item->featured_image) }}" alt="{{ $item->title }}"
                                class="img-fluid w-100 h-100" style="object-fit: cover;">
                        </div>
                        <div class="card-body p-4">
                            <div class="news-meta mb-3">
                                <span class="news-date text-muted me-3">
                                    <i class="far fa-calendar me-1"></i>{{ $item->published_at->format('d M Y') }}
                                </span>
                                <span class="news-category badge bg-primary">{{ ucfirst($item->type) }}</span>
                            </div>
                            <h5 class="news-title fw-bold mb-3">
                                <a href="{{ route('news.show', $item->slug) }}" class="text-decoration-none text-dark">
                                    {{ $item->title }}
                                </a>
                            </h5>
                            <p class="news-excerpt text-muted">{{ Str::limit($item->excerpt, 120) }}</p>
                            <a href="{{ route('news.show', $item->slug) }}" class="btn btn-primary btn-sm">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="empty-state">
                        <i class="fas fa-newspaper fa-3x text-muted mb-3"></i>
                        <h4 class="text-muted">Belum ada berita</h4>
                        <p class="text-muted">Berita akan segera hadir di sini.</p>
                    </div>
                </div>
            @endforelse
        </div>

        @if ($news->hasPages())
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
