<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share services data with all frontend views
        View::composer('frontend.*', function ($view) {
            try {
                $services = Service::active()->main()->with('children')->orderBy('sort_order')->get();
            } catch (\Exception $e) {
                $services = collect();
            }
            
            $view->with('services', $services);
        });
    }
}
