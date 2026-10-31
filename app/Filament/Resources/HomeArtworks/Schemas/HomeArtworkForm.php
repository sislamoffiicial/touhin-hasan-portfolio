<?php

namespace App\Filament\Resources\HomeArtworks\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class HomeArtworkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slot')
    ->label('Homepage slot')
    ->required()
    ->numeric()
    ->minValue(1)
    ->maxValue(7)
    ->unique(ignoreRecord: true),

FileUpload::make('image')
    ->label('Artwork image')
    ->image()
    ->imageEditor()
    ->directory('home-artworks')
    ->disk('public')
    ->visibility('public')
    ->required(),
                TextInput::make('alt_text'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
