# Laravel Marketing Pages

A set of default blade marketing pages and elements for new Laravel projects.

This package provides:
- Pre-built marketing page templates
- Easy-to-customize blade components
- Routes for marketing pages

## Installation

Install via composer:

```bash
composer require petervandijck/marketing-pages
```

The package will automatically register its service provider if you're using Laravel 5.5+.

## Usage

### Publishing Assets

Publish the views:

```bash
php artisan vendor:publish --tag=marketing-pages-views
```

Optionally, publish the routes for customization:

```bash
php artisan vendor:publish --tag=marketing-pages-routes
```

### Accessing Pages

Once installed, you can access the marketing home page at:

```
/marketing
```

### Customizing Templates

Edit the published templates in `resources/views/marketing/` to customize them for your project.

## Components

### Available Pages
- Home (`marketing.home`)

### Available Components
- Footer (`marketing.footer`)

## License

MIT