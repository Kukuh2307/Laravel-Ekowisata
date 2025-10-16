<?php

namespace App\Filament\Resources\ProdukSectionResource\Pages;

use App\Filament\Resources\ProdukSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProdukSection extends CreateRecord
{
    protected static string $resource = ProdukSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
        ];
    }
    // redirect to index after create
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
