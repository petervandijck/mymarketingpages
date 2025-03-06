<?php

namespace Petervandijck\MarketingPages;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MarketingPagesServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Publish views
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/marketing'),
        ], 'marketing-pages-views');

        // Load views from your package
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'marketing');

        // Register blade components with their original paths
        Blade::componentNamespace('Petervandijck\\MarketingPages\\View\\Components', 'marketing');

        // Register anonymous blade components
        $this->registerAnonymousComponents();

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Publish routes (optional for customization)
        $this->publishes([
            __DIR__ . '/routes/web.php' => base_path('routes/marketing.php'),
        ], 'marketing-pages-routes');
    }

    private function registerAnonymousComponents(): void
    {
        // Register all block components
        foreach (['header', 'hero', 'cta', 'testimonial', 'pricing', 'stats', 'team', 'faq', 'footer', 'logo-cloud'] as $blockType) {
            $blockPath = __DIR__ . '/resources/views/blocks/' . $blockType;

            if (is_dir($blockPath)) {
                foreach (scandir($blockPath) as $file) {
                    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                        $name = pathinfo($file, PATHINFO_FILENAME);
                        Blade::component('marketing::blocks.' . $blockType . '.' . $name, 'marketing.' . $blockType . '.' . $name);
                    }
                }
            }
        }
    }
}