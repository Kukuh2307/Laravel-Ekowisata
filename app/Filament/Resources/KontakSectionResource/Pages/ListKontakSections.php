<?php

namespace App\Filament\Resources\KontakSectionResource\Pages;

use App\Filament\Resources\KontakSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKontakSections extends ListRecords
{
    protected static string $resource = KontakSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
