<?php

namespace App\Filament\Resources\MitraSectionResource\Pages;

use App\Filament\Resources\MitraSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMitraSection extends EditRecord
{
    protected static string $resource = MitraSectionResource::class;

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
