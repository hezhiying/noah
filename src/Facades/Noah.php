<?php

namespace Zine\Noah\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Noah.
 *
 */
class Noah extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Zine\Noah\Noah::class;
    }
}
