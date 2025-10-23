<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Data dummy sementara (nanti bisa diganti dari database)
        $stats = [
            'services'  => 5,
            'users'     => 12,
            'orders'    => 8,
            'news'      => 3,
            'galleries' => 10,
            'partners'  => 4, // ✅ Tambahkan ini supaya tidak error lagi
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
