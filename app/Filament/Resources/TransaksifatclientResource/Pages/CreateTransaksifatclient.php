<?php

namespace App\Filament\Resources\TransaksifatclientResource\Pages;

use App\Filament\Resources\TransaksifatclientResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTransaksifatclient extends CreateRecord
{
    protected static string $resource = TransaksifatclientResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list setelah berhasil create
        return $this->getResource()::getUrl('index');
    }
}
