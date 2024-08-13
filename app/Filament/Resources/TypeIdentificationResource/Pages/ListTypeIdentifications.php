<?php

namespace App\Filament\Resources\TypeIdentificationResource\Pages;

use App\Filament\Resources\TypeIdentificationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypeIdentifications extends ListRecords
{
    protected static string $resource = TypeIdentificationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Crear tipo de identificacion'),
        ];
    }
}
