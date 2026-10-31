<?php

namespace App\Filament\Resources\ContactSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('location')
                    ->required()
                    ->default('Dhaka, Bangladesh'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required()
                    ->default('touhinhasan@gmail.com'),
                TextInput::make('studio_label')
                    ->required()
                    ->default('Studio'),
                Textarea::make('studio_address')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('phone')
                    ->tel(),
                Textarea::make('google_map_embed_url')
                    ->columnSpanFull(),
            ]);
    }
}
