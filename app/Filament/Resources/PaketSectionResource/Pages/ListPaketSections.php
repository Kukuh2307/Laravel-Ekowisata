<?php

namespace App\Filament\Resources\PaketSectionResource\Pages;

use App\Filament\Resources\PaketSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaketSections extends ListRecords
{
    protected static string $resource = PaketSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
