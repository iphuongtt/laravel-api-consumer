<?php

namespace Iphuongtt\ApiConsumer\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iphuongtt\ApiConsumer\Router
 */
class ApiConsumer extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'apiconsumer';
    }
}
