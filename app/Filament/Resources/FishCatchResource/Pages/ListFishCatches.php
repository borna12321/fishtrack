<?php

namespace App\Filament\Resources\FishCatchResource\Pages;

use App\Filament\Resources\FishCatchResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFishCatches extends ListRecords
{
    protected static string $resource = FishCatchResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
