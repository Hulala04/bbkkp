<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get main services (no parent)
        $services = Service::active()->main()->orderBy('sort_order')->get();
        
        // Get featured news (with fallback)
        $featuredNews = collect();
        try {
            $featuredNews = News::published()->featured()->latest()->take(3)->get();
        } catch (\Exception $e) {
            // If news table doesn't exist or has no data, use empty collection
        }
        
        // Get latest news (with fallback)
        $latestNews = collect();
        try {
            $latestNews = News::published()->latest()->take(6)->get();
        } catch (\Exception $e) {
            // If news table doesn't exist or has no data, use empty collection
        }
        
        // Get hero images (with fallback)
        $heroImages = collect();
        try {
            $heroImages = Gallery::active()->byType('hero')->orderBy('sort_order')->get();
        } catch (\Exception $e) {
            // If gallery table doesn't exist or has no data, use empty collection
        }
        
        // Get partners (with fallback)
        $partners = collect();
        try {
            $partners = Partner::active()->orderBy('sort_order')->get();
        } catch (\Exception $e) {
            // If partners table doesn't exist or has no data, use empty collection
        }
        
        // Get site settings (with fallback)
        $siteSettings = collect();
        try {
            $siteSettings = SiteSetting::pluck('value', 'key');
        } catch (\Exception $e) {
            // If site_settings table doesn't exist or has no data, use empty collection
        }
        
        return view('frontend.home', compact(
            'services',
            'featuredNews',
            'latestNews',
            'heroImages',
            'partners',
            'siteSettings'
        ));
    }
}
