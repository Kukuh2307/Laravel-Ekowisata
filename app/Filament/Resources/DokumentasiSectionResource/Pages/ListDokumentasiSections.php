<?php

namespace App\Filament\Resources\DokumentasiSectionResource\Pages;

use App\Filament\Resources\DokumentasiSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDokumentasiSections extends ListRecords
{
    protected static string $resource = DokumentasiSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getTableActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
