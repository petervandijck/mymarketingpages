<?php

namespace Petervandijck\MarketingPages;

use Illuminate\Support\ServiceProvider;

class MarketingPagesServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/marketing'),
        ], 'marketing-pages');
        // user does: php artisan vendor:publish --tag=marketing-pages
    }
}