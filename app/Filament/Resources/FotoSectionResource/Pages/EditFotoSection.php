<?php

namespace App\Filament\Resources\FotoSectionResource\Pages;

use App\Filament\Resources\FotoSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFotoSection extends EditRecord
{
    protected static string $resource = FotoSectionResource::class;

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
