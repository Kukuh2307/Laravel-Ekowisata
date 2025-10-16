<?php

namespace App\Filament\Resources\DokumentasiSectionResource\Pages;

use App\Filament\Resources\DokumentasiSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDokumentasiSection extends EditRecord
{
    protected static string $resource = DokumentasiSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
