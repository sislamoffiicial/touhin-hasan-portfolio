<?php

namespace App\Filament\Resources\Exhibitions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class ExhibitionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Select::make('type')
    ->label('Exhibition type')
    ->options([
        'solo' => 'Solo',
        'group' => 'Group',
    ])
    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('year')
                    ->numeric(),
                TextInput::make('city'),
                TextInput::make('country'),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_published')
                    ->required(),
            ]);
    }
}
