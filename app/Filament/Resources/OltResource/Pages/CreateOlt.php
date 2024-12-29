<?php

namespace App\Filament\Resources\OltResource\Pages;

use App\Filament\Resources\OltResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOlt extends CreateRecord
{
    protected static string $resource = OltResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list setelah berhasil create
        return $this->getResource()::getUrl('index');
    }
}
