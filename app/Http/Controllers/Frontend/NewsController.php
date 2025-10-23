<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::published()->latest()->paginate(12);

        return view('frontend.news.index', compact('news'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->published()->firstOrFail();

        // Get related news (same category or latest)
        $relatedNews = News::published()
            ->where('id', '!=', $news->id)
            ->where('type', $news->type)
            ->latest()
            ->take(4)
            ->get();

        return view('frontend.news.show', compact('news', 'relatedNews'));
    }
}
