<?php

declare(strict_types=1);

namespace LaravelPaper\DjotDriver\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelPaper\DjotDriver\DjotDriver
 */
class DjotDriver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelPaper\DjotDriver\DjotDriver::class;
    }
}
