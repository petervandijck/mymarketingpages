<?php

namespace Petervandijck\MarketingPages;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Filesystem\Filesystem;

class MarketingPagesServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Load views from your package
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'marketing');

        // Auto-register all block components
        $this->registerBlockComponents();

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

    /**
     * Auto-register all block components found in the blocks directory
     */
    private function registerBlockComponents(): void
    {
        $filesystem = new Filesystem();
        $blocksPath = __DIR__ . '/resources/views/blocks';

        // Make sure blocks directory exists
        if (!$filesystem->isDirectory($blocksPath)) {
            return;
        }

        // Loop through each block type directory (header, cta, etc.)
        foreach ($filesystem->directories($blocksPath) as $blockTypeDir) {
            $blockType = basename($blockTypeDir);

            // Loop through blade files in each block type directory
            foreach ($filesystem->files($blockTypeDir) as $file) {
                if ($file->getExtension() === 'php') {
                    $fileName = $file->getFilenameWithoutExtension();

                    // Register the component
                    $viewName = "marketing::blocks.{$blockType}.{$fileName}";
                    $aliasName = "marketing.{$blockType}.{$fileName}";
                    Blade::component($viewName, $aliasName);
                }
            }
        }
    }
}