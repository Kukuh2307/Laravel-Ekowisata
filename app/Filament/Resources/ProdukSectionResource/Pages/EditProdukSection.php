<?php

namespace App\Filament\Resources\ProdukSectionResource\Pages;

use App\Filament\Resources\ProdukSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProdukSection extends EditRecord
{
    protected static string $resource = ProdukSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    // redirect to index after edit 
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
