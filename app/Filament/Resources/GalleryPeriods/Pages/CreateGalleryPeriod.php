<?php

namespace App\Filament\Resources\GalleryPeriods\Pages;

use App\Filament\Resources\GalleryPeriods\GalleryPeriodResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGalleryPeriod extends CreateRecord
{
    protected static string $resource = GalleryPeriodResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
