<?php

namespace App\Filament\Resources\TypeIdentificationResource\Pages;

use App\Filament\Resources\TypeIdentificationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTypeIdentification extends EditRecord
{
    protected static string $resource = TypeIdentificationResource::class;

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
