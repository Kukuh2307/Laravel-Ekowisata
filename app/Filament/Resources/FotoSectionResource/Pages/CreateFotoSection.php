<?php

namespace App\Filament\Resources\FotoSectionResource\Pages;

use App\Filament\Resources\FotoSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFotoSection extends CreateRecord
{
    protected static string $resource = FotoSectionResource::class;

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
