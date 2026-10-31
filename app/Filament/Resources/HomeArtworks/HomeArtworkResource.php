<?php

namespace App\Filament\Resources\HomeArtworks;

use App\Filament\Resources\HomeArtworks\Pages\CreateHomeArtwork;
use App\Filament\Resources\HomeArtworks\Pages\EditHomeArtwork;
use App\Filament\Resources\HomeArtworks\Pages\ListHomeArtworks;
use App\Filament\Resources\HomeArtworks\Schemas\HomeArtworkForm;
use App\Filament\Resources\HomeArtworks\Tables\HomeArtworksTable;
use App\Models\HomeArtwork;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeArtworkResource extends Resource
{
    protected static ?string $model = HomeArtwork::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'slot';

    public static function form(Schema $schema): Schema
    {
        return HomeArtworkForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeArtworksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHomeArtworks::route('/'),
            'create' => CreateHomeArtwork::route('/create'),
            'edit' => EditHomeArtwork::route('/{record}/edit'),
        ];
    }
}
