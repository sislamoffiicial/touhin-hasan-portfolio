<?php

namespace App\Filament\Resources\HomeArtworks\Pages;

use App\Filament\Resources\HomeArtworks\HomeArtworkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeArtworks extends ListRecords
{
    protected static string $resource = HomeArtworkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
