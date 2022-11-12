<?php

namespace Sitemap;

use Sitemap\Contracts\Renderable;
use Sitemap\Exceptions\DataNotValid;
use Sitemap\Exceptions\FileSystemException;
use Sitemap\Exceptions\RenderNotFound;

class Sitemap
{
    private array $urls = [];
    private string $typeFile;

    public function __construct(array $urls, string $typeFile)
    {
        $this->typeFile = $typeFile;
        $this->urls = $urls;
        $this->validate();;
    }

    public function render()
    {
        return $this->getRender()->render();
    }

    public function writeToFile(string $path)
    {
        $content = $this->render();
        $dirname = dirname($path);
        if (! is_dir($dirname)) {
            mkdir($dirname);
        }

        try {
            file_put_contents($path, $content);
        } catch (\Exception $e) {
            throw new FileSystemException($e->getMessage());
        }
    }


    private function validate()
    {
        if (empty($this->urls)) {
            throw new DataNotValid('$urls parameter should not be empty');
        }

    }

    private function getRender(): Renderable
    {
        $className = 'Sitemap\\Renders\\' . ucfirst($this->typeFile) . 'Render';
        if (! class_exists($className)) {
            throw new RenderNotFound(trans('sitemap.exception.class-not-found', ['class' => $className]));
        }

        return new $className($this->urls);
    }
}
