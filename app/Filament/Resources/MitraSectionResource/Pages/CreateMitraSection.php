<?php

namespace App\Filament\Resources\MitraSectionResource\Pages;

use App\Filament\Resources\MitraSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMitraSection extends CreateRecord
{
    protected static string $resource = MitraSectionResource::class;

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
