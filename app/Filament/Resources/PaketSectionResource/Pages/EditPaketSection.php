<?php

namespace App\Filament\Resources\PaketSectionResource\Pages;

use App\Filament\Resources\PaketSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaketSection extends EditRecord
{
    protected static string $resource = PaketSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
