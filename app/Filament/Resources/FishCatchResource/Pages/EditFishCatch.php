<?php

namespace App\Filament\Resources\FishCatchResource\Pages;

use App\Filament\Resources\FishCatchResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFishCatch extends EditRecord
{
    protected static string $resource = FishCatchResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
