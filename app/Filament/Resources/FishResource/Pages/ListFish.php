<?php

namespace App\Filament\Resources\FishResource\Pages;

use App\Filament\Resources\FishResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFish extends ListRecords
{
    protected static string $resource = FishResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
