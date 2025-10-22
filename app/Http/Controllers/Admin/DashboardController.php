<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Admin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'services' => 0,
            'news' => 0,
            'galleries' => 0,
            'partners' => 0,
            'admins' => 0,
        ];
        
        $recentServices = collect();
        $recentNews = collect();
        
        try {
            $stats['services'] = Service::count();
            $stats['news'] = News::count();
            $stats['galleries'] = Gallery::count();
            $stats['partners'] = Partner::count();
            $stats['admins'] = Admin::count();
            
            $recentServices = Service::latest()->take(5)->get();
            $recentNews = News::latest()->take(5)->get();
        } catch (\Exception $e) {
            // Handle case where tables don't exist yet
        }
        
        return view('admin.dashboard', compact('stats', 'recentServices', 'recentNews'));
    }
}
