<?php

namespace App\Filament\Resources\FotoSectionResource\Pages;

use App\Filament\Resources\FotoSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFotoSections extends ListRecords
{
    protected static string $resource = FotoSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
