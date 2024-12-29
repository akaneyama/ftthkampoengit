<?php

namespace App\Filament\Resources\FatResource\Pages;

use App\Filament\Resources\FatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFats extends ListRecords
{
    protected static string $resource = FatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
