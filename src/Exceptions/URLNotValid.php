<?php

namespace Sitemap\Exceptions;

use Exception;
use Throwable;

class URLNotValid extends Exception
{
    /**
     *
     * @param  string  $message
     * @param  int  $code
     * @param  \Throwable|null  $previous
     * @return void
     */
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
