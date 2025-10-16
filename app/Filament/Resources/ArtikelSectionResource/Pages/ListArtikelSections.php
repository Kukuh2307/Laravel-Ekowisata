<?php

namespace App\Filament\Resources\ArtikelSectionResource\Pages;

use App\Filament\Resources\ArtikelSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArtikelSections extends ListRecords
{
    protected static string $resource = ArtikelSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
