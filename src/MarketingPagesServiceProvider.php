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
// Header components
        Blade::component('marketing::blocks.header.simple', 'marketing.header.simple');
        Blade::component('marketing::blocks.header.centered', 'marketing.header.centered');
        Blade::component('marketing::blocks.header.centered-with-eyebrow', 'marketing.header.centered-with-eyebrow');

// CTA components
        Blade::component('marketing::blocks.cta.simple-centered', 'marketing.cta.simple-centered');
        Blade::component('marketing::blocks.cta.simple-centered-dark', 'marketing.cta.simple-centered-dark');
        Blade::component('marketing::blocks.cta.simple-stacked', 'marketing.cta.simple-stacked');
// Remove this one if the file doesn't exist
// Blade::component('marketing::blocks.cta.simple-left', 'marketing.cta.simple-left');

// Team components
        Blade::component('marketing::blocks.team.small-images', 'marketing.team.small-images');
        Blade::component('marketing::blocks.team.grid', 'marketing.team.grid');

// Testimonial components
        Blade::component('marketing::blocks.testimonial.with-star-rating', 'marketing.testimonial.with-star-rating');
        Blade::component('marketing::blocks.testimonial.off-white-grid', 'marketing.testimonial.off-white-grid');

// Pricing components
        Blade::component('marketing::blocks.pricing.three-tiers', 'marketing.pricing.three-tiers');
        Blade::component('marketing::blocks.pricing.two-tiers', 'marketing.pricing.two-tiers');
        Blade::component('marketing::blocks.pricing.single-price-with-details', 'marketing.pricing.single-price-with-details');

// Hero components
        Blade::component('marketing::blocks.hero.split-with-screenshot', 'marketing.hero.split-with-screenshot');
        Blade::component('marketing::blocks.hero.simple-centered', 'marketing.hero.simple-centered');

// Footer components
        Blade::component('marketing::blocks.footer.simple', 'marketing.footer.simple');
        Blade::component('marketing::blocks.footer.simple-dark', 'marketing.footer.simple-dark');
        Blade::component('marketing::blocks.footer.4-column', 'marketing.footer.4-column');
        Blade::component('marketing::blocks.footer.4-column-dark', 'marketing.footer.4-column-dark');

// Logo cloud component
        Blade::component('marketing::blocks.logo-cloud.simple', 'marketing.logo-cloud.simple');

// FAQ components
        Blade::component('marketing::blocks.faq.offset', 'marketing.faq.offset');

// Stats component
        Blade::component('marketing::blocks.stats.simple', 'marketing.stats.simple');
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