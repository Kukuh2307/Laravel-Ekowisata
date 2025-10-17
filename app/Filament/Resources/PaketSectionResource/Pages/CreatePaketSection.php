<?php

namespace App\Filament\Resources\PaketSectionResource\Pages;

use App\Filament\Resources\PaketSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePaketSection extends CreateRecord
{
    protected static string $resource = PaketSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\CreateAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
