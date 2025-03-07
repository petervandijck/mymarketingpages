# Laravel Marketing Pages

A set of default blade marketing pages and elements for new Laravel projects.

This package provides:
- Pre-built marketing page templates
- Easy-to-customize blade components
- Routes for marketing pages


Until we publish it on packagist, you have to add this to composer.json before installing it
```bash
"repositories": [
{
"type": "vcs",
"url": "https://github.com/petervandijck/mymarketingpages"
}
]
```
and then run
```bash
composer update
composer require petervandijck/mymarketingpages
```


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