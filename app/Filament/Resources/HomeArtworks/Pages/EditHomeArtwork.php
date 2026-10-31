<?php

namespace App\Filament\Resources\HomeArtworks\Pages;

use App\Filament\Resources\HomeArtworks\HomeArtworkResource;
use Filament\Resources\Pages\EditRecord;

class EditHomeArtwork extends EditRecord
{
    protected static string $resource = HomeArtworkResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
