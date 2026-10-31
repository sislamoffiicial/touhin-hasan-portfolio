<?php

namespace App\Filament\Resources\GalleryPeriods;

use App\Filament\Resources\GalleryPeriods\Pages\CreateGalleryPeriod;
use App\Filament\Resources\GalleryPeriods\Pages\EditGalleryPeriod;
use App\Filament\Resources\GalleryPeriods\Pages\ListGalleryPeriods;
use App\Filament\Resources\GalleryPeriods\Schemas\GalleryPeriodForm;
use App\Filament\Resources\GalleryPeriods\Tables\GalleryPeriodsTable;
use App\Models\GalleryPeriod;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GalleryPeriodResource extends Resource
{
    protected static ?string $model = GalleryPeriod::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return GalleryPeriodForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalleryPeriodsTable::configure($table);
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
            'index' => ListGalleryPeriods::route('/'),
            'create' => CreateGalleryPeriod::route('/create'),
            'edit' => EditGalleryPeriod::route('/{record}/edit'),
        ];
    }
}
