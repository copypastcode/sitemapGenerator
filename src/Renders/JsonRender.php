<?php

namespace Sitemap\Renders;

use \Sitemap\Contracts\Renderable;

class JsonRender implements Renderable
{
    private array $urls;

    public function __construct(array $urls)
    {
        $this->urls = $urls;
    }

    public function render(): string
    {
        return json_encode($this->urls);
    }
}
