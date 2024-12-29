<?php

namespace App\Filament\Resources\UserftthResource\Pages;

use App\Filament\Resources\UserftthResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUserftth extends CreateRecord
{
    protected static string $resource = UserftthResource::class;
    protected function getRedirectUrl(): string
    {
        // Redirect ke halaman list setelah berhasil create
        return $this->getResource()::getUrl('index');
    }
}
