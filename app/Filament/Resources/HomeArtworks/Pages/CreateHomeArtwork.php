<?php

namespace App\Filament\Resources\HomeArtworks\Pages;

use App\Filament\Resources\HomeArtworks\HomeArtworkResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeArtwork extends CreateRecord
{
    protected static string $resource = HomeArtworkResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
