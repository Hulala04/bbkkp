<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Partner;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // Statistik total data
            $stats = [
                'services'  => Service::count(),
                'news'      => News::count(),
                'galleries' => Gallery::count(),
                'partners'  => Partner::count(),
            ];

            // Ambil 5 data terbaru
            $recentServices = Service::latest()->take(5)->get();
            $recentNews     = News::latest()->take(5)->get();
        } catch (\Exception $e) {
            Log::error('Dashboard error: ' . $e->getMessage());

            // Jika ada error, tampilkan data default agar halaman tetap jalan
            $stats = [
                'services'  => 0,
                'news'      => 0,
                'galleries' => 0,
                'partners'  => 0,
            ];
            $recentServices = collect();
            $recentNews     = collect();
        }

        // Pastikan variabel selalu ada
        $recentServices = $recentServices ?? collect();
        $recentNews = $recentNews ?? collect();

        // Kirim semua variabel ke view
        return view('admin.dashboard', compact('stats', 'recentServices', 'recentNews'));
    }
}
