<?php

namespace App\Filament\Resources\GalleryItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;


class GalleryItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
    ->label('Gallery type')
    ->options([
        'Artwork' => 'Artwork',
        'Conceptual Art' => 'Conceptual Art',
    ])
    ->required()
    ->default('Artwork'),

                    Select::make('gallery_period_id')
    ->label('Gallery period')
    ->relationship('galleryPeriod', 'name')
    ->searchable()
    ->preload()
    ->nullable(),
                TextInput::make('title')
                    ->required(),
                FileUpload::make('image')
    ->label('Artwork image')
    ->image()
    ->imageEditor()
    ->directory('gallery')
    ->disk('public')
    ->visibility('public'),
                Textarea::make('note')
                    ->columnSpanFull(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
