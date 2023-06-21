<?php

namespace Dashboard;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'pos-dashboard');
    }

    public function register()
    {
        // Add your package's register logic here
    }
}
