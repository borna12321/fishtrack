<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FishResource\Pages;
use App\Models\Fish;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FishResource extends Resource
{
    protected static ?string $model = Fish::class;

    protected static ?string $slug = 'fish';

    protected static ?string $recordTitleAttribute = 'name';
    protected static ?string $navigationIcon = 'heroicon-o-wallet';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required(),

            TextInput::make('species_name')
                ->required(),

            TextInput::make('description')
                ->required(),


        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->searchable()
                ->sortable(),

            TextColumn::make('species_name'),

            TextColumn::make('description'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFish::route('/'),
            'create' => Pages\CreateFish::route('/create'),
            'edit' => Pages\EditFish::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
