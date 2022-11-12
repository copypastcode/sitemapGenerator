<?php

namespace Sitemap\Renders;

use \Sitemap\Contracts\Renderable;

class CsvRender implements Renderable
{
    private array $urls;

    public function __construct(array $urls)
    {
        $this->urls = $urls;
    }

    public function render(): string
    {
        $urls = $this->urls;
        return view('sitemap::csv.index')
            ->with(compact('urls'))
            ->render();
    }
}
