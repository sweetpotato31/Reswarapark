<?php

namespace App\Filament\Resources\MUnitResource\Pages;

use App\Filament\Resources\MUnitResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageMUnits extends ManageRecords
{
    protected static string $resource = MUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Unit')
                ->icon('heroicon-o-plus'),
        ];
    }
}