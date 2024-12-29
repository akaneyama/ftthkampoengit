<?php

namespace App\Filament\Resources\OdcResource\Pages;

use App\Filament\Resources\OdcResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOdcs extends ListRecords
{
    protected static string $resource = OdcResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
