<?php

namespace Kraenkvisuell\NovaHero\Facades;

use Illuminate\Support\Facades\Facade;

class Hero extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hero';
    }
}
