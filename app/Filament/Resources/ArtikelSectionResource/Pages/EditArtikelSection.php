<?php

namespace App\Filament\Resources\ArtikelSectionResource\Pages;

use App\Filament\Resources\ArtikelSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArtikelSection extends EditRecord
{
    protected static string $resource = ArtikelSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
        // redirect to index after create
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
