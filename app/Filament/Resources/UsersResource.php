<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Models\Team;
use App\Models\User;
use Faker\Provider\Text;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
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
                ->email()
                ->required()
                ->unique(User::class, 'email', ignoreRecord: true)
                ->label('Email'),
            Select::make('team_id')
                ->label('Team Name')
//                ->options(Team::query()->pluck('name', 'id'))
                    ->multiple()
                ->relationship('teams','name')
                ->required()
                ->reactive()
            ,


            Password::make('password')
                ->required(fn($record) => $record === null)
                ->dehydrateStateUsing(fn($state) => Hash::make($state))
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
            TextColumn::make('name')->searchable()
            ,
            TextColumn::make('email')->searchable(),
            TextColumn::make('team')
                ->getStateUsing(function(User $record): string {
                    dd($record->showTeammates()->where('id'));
                    //dd($record->getTeammates(2));
                    return $record->teams->pluck('name')->join(', '); // Joins team names with a comma
                })


//            TextColumn::make('teams.name')
//                ->label('Team Name')

        ])
            ->actions([
                EditAction::make('edit'),
                DeleteAction::make('delete'),
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

//                SelectFilter::make('team_id')
//                    ->options(Team::all()->pluck('name','id')->toArray())
//                    //->label('Team')
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereNot('id',1);
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
