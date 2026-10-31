<?php

namespace App\Filament\Resources\AboutSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('artist_statement')
                    ->label('Artist Statement')
                    ->limit(80)
                    ->wrap(),

                TextColumn::make('bio')
                    ->label('Bio')
                    ->limit(80)
                    ->wrap(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
