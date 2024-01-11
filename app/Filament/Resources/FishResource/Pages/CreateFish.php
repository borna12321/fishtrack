<?php

namespace App\Filament\Resources\FishResource\Pages;

use App\Filament\Resources\FishResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFish extends CreateRecord
{
    protected static string $resource = FishResource::class;

    protected function getActions(): array
    {
        return [

        ];
    }
}
