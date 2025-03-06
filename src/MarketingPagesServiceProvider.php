<?php

namespace Petervandijck\MarketingPages;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MarketingPagesServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Load views from your package
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'marketing');

        // Register components directly - make sure this comes after loadViewsFrom
        Blade::component('marketing::blocks.header.simple', 'marketing.header.simple');
        Blade::component('marketing::blocks.cta.simple-centered', 'marketing.cta.simple-centered');
        Blade::component('marketing::blocks.cta.simple-centered-dark', 'marketing.cta.simple-centered-dark');
        Blade::component('marketing::blocks.cta.simple-stacked', 'marketing.cta.simple-stacked');
        Blade::component('marketing::blocks.cta.simple', 'marketing.cta.simple');
        Blade::component('marketing::blocks.cta.dark', 'marketing.cta.dark');
        Blade::component('marketing::blocks.cta.simple-left', 'marketing.cta.simple-left');
        Blade::component('marketing::blocks.faq.simple', 'marketing.faq.simple');
        Blade::component('marketing::blocks.footer.simple', 'marketing.footer.simple');
        Blade::component('marketing::blocks.footer.dark', 'marketing.footer.dark');





        // Add more components manually as needed

        // Publish views
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/marketing'),
        ], 'marketing-pages-views');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Publish routes
        $this->publishes([
            __DIR__ . '/routes/web.php' => base_path('routes/marketing.php'),
        ], 'marketing-pages-routes');
    }
}