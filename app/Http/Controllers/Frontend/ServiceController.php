<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::active()->main()->with('children')->orderBy('sort_order')->get();
        
        return view('frontend.services.index', compact('services'));
    }
    
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->active()->firstOrFail();
        
        // Get related services (same parent or main services)
        $relatedServices = Service::active()
            ->where('id', '!=', $service->id)
            ->where(function($query) use ($service) {
                if ($service->parent_id) {
                    $query->where('parent_id', $service->parent_id);
                } else {
                    $query->whereNull('parent_id');
                }
            })
            ->orderBy('sort_order')
            ->take(6)
            ->get();
        
        return view('frontend.services.show', compact('service', 'relatedServices'));
    }
}
