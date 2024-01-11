<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\UsersResource\Pages\ListUsers;
use App\Models\Team;
use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $slug = 'teams';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $recordTitleAttribute = 'name';


    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->reactive()
                ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),




        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->searchable()
                ->sortable()
            ,


            TextColumn::make('users_count')
                ->sortable()
                ->getStateUsing(function(Team $record): string {
                    // dd(\DB::table('team_user')->pluck('team_id')->where('team_id'));
                    $userList = \DB::table('users')->whereNotNull('name')->get();
                    //return $record->teams->pluck('name')->join(', '); // Joins team names with a comma
                    return count($userList);
                })

        ])
            ->recordUrl(function ($record){
                $baseUrl = ListUsers::getUrl();
                $filteredUrl = "{$baseUrl}?tableFilters[team_id][value]={$record->id}";
                return $filteredUrl;
            });

    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'slug'];
    }
}
