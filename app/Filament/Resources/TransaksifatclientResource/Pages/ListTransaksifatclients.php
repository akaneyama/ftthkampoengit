<?php

namespace App\Filament\Resources\TransaksifatclientResource\Pages;

use App\Filament\Resources\TransaksifatclientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransaksifatclients extends ListRecords
{
    protected static string $resource = TransaksifatclientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
