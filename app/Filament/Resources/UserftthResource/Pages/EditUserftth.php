<?php

namespace App\Filament\Resources\UserftthResource\Pages;

use App\Filament\Resources\UserftthResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserftth extends EditRecord
{
    protected static string $resource = UserftthResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
