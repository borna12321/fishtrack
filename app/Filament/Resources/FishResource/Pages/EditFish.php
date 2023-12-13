<?php

namespace App\Filament\Resources\FishResource\Pages;

use App\Filament\Resources\FishResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFish extends EditRecord
{
    protected static string $resource = FishResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
