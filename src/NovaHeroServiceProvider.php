<?php

namespace Kraenkvisuell\NovaHero;

use Illuminate\Support\ServiceProvider;

class NovaHeroServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-hero');

        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/vendor/nova-hero'),
        ], 'nova-hero');
    }

    public function register()
    {
        $this->app->bind('hero', function () {
            return new Hero();
        });
    }
}
