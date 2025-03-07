# Laravel Marketing Pages

A set of default blade marketing pages and elements for new Laravel projects.

## Installation
Add this to composer.json (because it is not on packagist)
```bash
"repositories": [
{
"type": "vcs",
"url": "https://github.com/petervandijck/mymarketingpages"
}
]
```
Install via composer:

```bash
composer require petervandijck/marketing-pages
```
Optionally but probably, publish the views and routes:

```bash
php artisan vendor:publish --tag=marketing-pages-views
```
and

```bash
php artisan vendor:publish --tag=marketing-pages-routes
```

Finally, delete your home / route in web.php and delete the home view in /views

## Usage
- Marketing routes are in a separate /routes/marketing.php file
- Views are in /views/marketing/
  - Blocks (/views/marketing/blocks) are UI blocks that can be included in views.
  - Modules are re-usable modules throughout all your pages. 
  - Pages are the marketing pages