<?php

namespace App\Filament\Resources\GalleryPeriods\Pages;

use App\Filament\Resources\GalleryPeriods\GalleryPeriodResource;
use Filament\Resources\Pages\EditRecord;

class EditGalleryPeriod extends EditRecord
{
    protected static string $resource = GalleryPeriodResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
