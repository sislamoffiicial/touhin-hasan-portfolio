<?php

namespace App\Filament\Resources\AboutSettings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;


class AboutSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('artist_statement')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('bio')
                    ->required()
                    ->columnSpanFull(),

                    FileUpload::make('artist_image')
    ->label('Artist image')
    ->image()
    ->imageEditor()
    ->directory('about')
    ->disk('public')
    ->visibility('public'),
            ]);
    }
}
