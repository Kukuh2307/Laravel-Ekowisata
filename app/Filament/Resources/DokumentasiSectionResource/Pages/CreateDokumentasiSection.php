<?php

namespace App\Filament\Resources\DokumentasiSectionResource\Pages;

use App\Filament\Resources\DokumentasiSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDokumentasiSection extends CreateRecord
{
    protected static string $resource = DokumentasiSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
        ];
    }
    // redirect to index after create
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
