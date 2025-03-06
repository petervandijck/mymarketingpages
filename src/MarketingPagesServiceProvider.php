<?php

namespace Petervandijck\MarketingPages;

use Illuminate\Support\ServiceProvider;

class MarketingPagesServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Publish views
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/marketing'),
        ], 'marketing-pages-views');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Publish routes (optional for customization)
        $this->publishes([
            __DIR__ . '/routes/web.php' => base_path('routes/marketing.php'),
        ], 'marketing-pages-routes');
    }
}