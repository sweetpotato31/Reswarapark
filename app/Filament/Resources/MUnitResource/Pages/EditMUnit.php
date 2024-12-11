<?php

namespace App\Filament\Resources\MUnitResource\Pages;

use App\Filament\Resources\MUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMUnit extends EditRecord
{
    protected static string $resource = MUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
