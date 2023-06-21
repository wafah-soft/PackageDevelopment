<?php

namespace Techmonstar\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'pos-dashboard');
        $this->publishes([
            __DIR__.'/../public/build' => base_path('public/build'),
        ], 'vue');
    }

    public function register()
    {
        // Add your package's register logic here
    }
}
