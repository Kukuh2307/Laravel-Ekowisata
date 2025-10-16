<?php

namespace App\Filament\Resources\SejarahSectionResource\Pages;

use App\Filament\Resources\SejarahSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSejarahSection extends CreateRecord
{
    protected static string $resource = SejarahSectionResource::class;

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
