<?php

namespace Kraenkvisuell\NovaHero;

use Laravel\Nova\Fields\Textarea;
use OptimistDigital\MediaField\MediaField;
use Whitecube\NovaFlexibleContent\Flexible;

class Hero
{
    public function field()
    {
        return Flexible::make('Banner', 'top_banners')
            ->addLayout('Banner', 'banner', [
                Textarea::make('Überschrift', 'headline')
                    ->rows(2)
                    ->translatable(),
                MediaField::make('Bild', 'image'),
            ])
            ->button('Banner hinzufügen')
            ->stacked();
    }
}
