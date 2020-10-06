<?php

namespace Kraenkvisuell\NovaHero;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use OptimistDigital\MediaField\MediaField;
use ClassicO\NovaMediaLibrary\MediaLibrary;
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
                MediaLibrary::make('Bild', 'image'),
                Text::make('Bildbeschreibung (alt text)', 'alt_text'),
            ])
            ->button('Banner hinzufügen')
            ->stacked();
    }
}
