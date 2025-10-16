<?php

namespace App\Filament\Resources\MitraSectionResource\Pages;

use App\Filament\Resources\MitraSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMitraSections extends ListRecords
{
    protected static string $resource = MitraSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
