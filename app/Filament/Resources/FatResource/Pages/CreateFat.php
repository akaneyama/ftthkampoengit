<?php

namespace App\Filament\Resources\FatResource\Pages;

use App\Filament\Resources\FatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFat extends CreateRecord
{
    protected static string $resource = FatResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list setelah berhasil create
        return $this->getResource()::getUrl('index');
    }
}
