<?php

namespace App\Filament\Resources\GalleryPeriods\Pages;

use App\Filament\Resources\GalleryPeriods\GalleryPeriodResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGalleryPeriods extends ListRecords
{
    protected static string $resource = GalleryPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
