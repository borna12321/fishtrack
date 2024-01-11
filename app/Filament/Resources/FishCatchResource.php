<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FishCatchResource\Pages;
use App\Models\FishCatch;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FishCatchResource extends Resource
{
    protected static ?string $model = FishCatch::class;

    protected static ?string $slug = 'fish-catches';

    protected static ?string $recordTitleAttribute = 'id';
    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('fish_id')
                ->required()
                ->label('Fish')
                ->relationship('fish', 'name')
                ->reactive(),
            Select::make('user_id')
                ->required()
                ->label('User')
                ->relationship('user', 'name')
                ->reactive(),



            TextInput::make('latitude')
                ->required()
                ->numeric(),

            TextInput::make('longitude')
                ->required()
                ->numeric(),

            DateTimePicker::make('datetime'),
            TextInput::make('weight')
                ->required()
                ->numeric(),
            TextInput::make('lure')
                ->required(),
            TextInput::make('style')
                ->required(),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
//            TextColumn::make('fish_id')
//                ->getStateUsing(function(FishCatch $record): string{
//                    //dd($record);
//                    //dd($record);
//
//                    return $this;
//                    //return $record->fish->;
//                }),

//            TextColumn::make('user_id')
//                ->getStateUsing(function(FishCatch $record): string{
//                    return $record->user->pluck('name')->where();
//                }),

            TextColumn::make('latitude'),

            TextColumn::make('longitude'),

            TextColumn::make('date')
                ->date(),


        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFishCatches::route('/'),
            'create' => Pages\CreateFishCatch::route('/create'),
            'edit' => Pages\EditFishCatch::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
