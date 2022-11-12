<?php

namespace Sitemap;

use Illuminate\Support\ServiceProvider;
use Sitemap\Commands\SitemapGenerator;

class SitemapServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishing();

        if ($this->app->runningInConsole()) {
            $this->commands([
                SitemapGenerator::class
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sitemap');
    }

    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/sitemap.php' => $this->app->configPath('sitemap.php'),
            ], 'sitemap-config');

            $this->publishes([
                __DIR__.'/../resources/lang' => $this->app->langPath('sitemap'),
            ], 'sitemap-lang');
        }
    }
}
