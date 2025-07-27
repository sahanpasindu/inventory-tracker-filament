<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Product Details')
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        Textarea::make('description')
                            ->columnSpanFull(),
                    ])->columnSpan(1)->columnStart(1),
                Section::make('Product Stock')
                    ->schema([
                        TextInput::make('sku')
                            ->required()
                            ->label('SKU'),
                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('LKR'),
                        TextInput::make('stock_quantity')
                            ->required()
                            ->numeric()
                            ->default(0),
                        TextInput::make('barcode')
                            ->numeric(),
                    ])->columnSpan(1)->columnStart(1),
            ]);
    }
}
