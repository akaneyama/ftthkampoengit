<?php

namespace App\Filament\Resources\FatResource\Pages;

use App\Filament\Resources\FatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFat extends EditRecord
{
    protected static string $resource = FatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
 protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list setelah berhasil create
        return $this->getResource()::getUrl('index');
    }
}
