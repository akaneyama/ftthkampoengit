<?php

namespace App\Filament\Resources\OdpResource\Pages;

use App\Filament\Resources\OdpResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOdp extends CreateRecord
{
    protected static string $resource = OdpResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list setelah berhasil create
        return $this->getResource()::getUrl('index');
    }
}
