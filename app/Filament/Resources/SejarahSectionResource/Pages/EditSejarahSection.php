<?php

namespace App\Filament\Resources\SejarahSectionResource\Pages;

use App\Filament\Resources\SejarahSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSejarahSection extends EditRecord
{
    protected static string $resource = SejarahSectionResource::class;

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
