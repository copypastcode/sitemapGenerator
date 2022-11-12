<?php

namespace Sitemap\Renders;

use \Sitemap\Contracts\Renderable;

class XmlRender implements Renderable
{
    private array $urls;

    public function __construct(array $urls)
    {
        $this->urls = $urls;
    }

    public function render(): string
    {
        $urls = $this->urls;
        return view('sitemap::xml.index')
            ->with(compact('urls'))
            ->render();
    }
}
