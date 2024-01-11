<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

use Illuminate\Support\Facades\Hash;
use Phpsa\FilamentPasswordReveal\Password;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $slug = 'users';
    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->label('Name'),

            TextInput::make('email')
                ->required()
                ->email()
                ->unique(User::class, 'email', ignoreRecord: true)
                ->label('Email'),
            Select::make('team_id')
                ->label('Team Name')
//                ->options(Team::query()->pluck('name', 'id'))
                ->multiple()
                ->relationship('teams','name')

                ->reactive()
            ,
            Password::make('password')
                ->required(fn($record)=> $record === null)
                ->dehydrateStateUsing(fn($state)=>Hash::make($state))
                ->label('Password')
                ->password(),
            Password::make('password_confirmation')
                ->required(fn($record) => $record === null)
                ->label('Confirm Password')
                ->same('password')





        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->searchable()
                ->sortable(),

            TextColumn::make('email')
                ->searchable()
                ->sortable(),

            TextColumn::make('team')
                ->getStateUsing(function(User $record): string {
                    //dd($record->getTeammates());
                    //dd($record->getTeammates(2));
                    return $record->teams->pluck('name')->join(', '); // Joins team names with a comma
                })
        ])
            ->actions([
                \Filament\Tables\Actions\EditAction::make('edit'),
                \Filament\Tables\Actions\DeleteAction::make('delete')
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make('delete')
                        ->requiresConfirmation(),

                ])
            ])
            ->filters([
                SelectFilter::make('team_id')
                    ->relationship('teams', 'name')


            ]);
    ;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email'];
    }
}
