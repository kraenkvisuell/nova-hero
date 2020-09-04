<?php

namespace Kraenkvisuell\NovaHero;

use Illuminate\Support\ServiceProvider;

class NovaHeroServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind('hero', function () {
            return new Hero();
        });
    }
}
