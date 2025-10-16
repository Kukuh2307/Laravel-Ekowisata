<?php

namespace App\Filament\Resources\ProdukSectionResource\Pages;

use App\Filament\Resources\ProdukSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProdukSections extends ListRecords
{
    protected static string $resource = ProdukSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
