<?php

namespace App\Filament\Resources\KontakSectionResource\Pages;

use App\Filament\Resources\KontakSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKontakSection extends EditRecord
{
    protected static string $resource = KontakSectionResource::class;

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
