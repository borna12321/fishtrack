<?php

namespace App\Filament\Pages;

use App\Models\FishCatch;
use Filament\Pages\Page;

class TeamFeed extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.team-feed';
    public function getCatchesAttribute()
    {
        return FishCatch::all();
    }

}
