<?php

namespace App\Filament\Resources\Presses\Pages;

use App\Filament\Resources\Presses\PressResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePress extends CreateRecord
{
    protected static string $resource = PressResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
