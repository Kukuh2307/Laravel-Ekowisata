<?php

namespace App\Filament\Resources\SejarahSectionResource\Pages;

use App\Filament\Resources\SejarahSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSejarahSections extends ListRecords
{
    protected static string $resource = SejarahSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
