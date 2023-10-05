<?php

namespace MrWilde\OpenEhrRM\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MrWilde\OpenEhrRM\OpenEhrRM
 */
class OpenEhrRM extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MrWilde\OpenEhrRM\OpenEhrRM::class;
    }
}
