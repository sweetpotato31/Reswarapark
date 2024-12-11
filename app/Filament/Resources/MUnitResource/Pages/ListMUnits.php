<?php

namespace App\Filament\Resources\MUnitResource\Pages;

use App\Filament\Resources\MUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMUnits extends ListRecords
{
    protected static string $resource = MUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
