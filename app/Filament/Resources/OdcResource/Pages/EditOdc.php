<?php

namespace App\Filament\Resources\OdcResource\Pages;

use App\Filament\Resources\OdcResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOdc extends EditRecord
{
    protected static string $resource = OdcResource::class;

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
