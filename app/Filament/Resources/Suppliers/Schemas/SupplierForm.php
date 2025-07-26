<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('email')->email(),
                TextInput::make('phone')->tel(),
            ])->columns([
                    'sm' => 1,
                    'md' => 2,
                    'lg' => 3,
                ]);
    }
}
