<?php

namespace Sitemap\Commands;

use Illuminate\Console\Command;
use Sitemap\Sitemap;

class SitemapGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'sitemap:generate {type} {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $type = $this->argument('type');
        $path = $this->argument('path');
        $sitemap = new Sitemap(config('sitemap.urls'), $type);
        $sitemap->writeToFile($path);

        return Command::SUCCESS;
    }
}
