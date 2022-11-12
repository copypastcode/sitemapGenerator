# Generate sitemaps

This package can generate a sitemap.

You can create a sitemap manually:

```php

use Sitemap\Sitemap;
$urls = [...]
$sitemap = new Sitemap($urls, 'csv');
$sitemap->writeToFile($path);
```

The generate a sitemap via a console command:

``` bash
artisan sitemap:generate type path-to-file

```

## Installation

First, install the package via composer:

``` bash
composer require romanv/sitemap
```

## Configuration

``` bash
php artisan vendor:publish --provider="vroman\Sitemap\SitemapServiceProvider" --tag=sitemap

```


