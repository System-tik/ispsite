<?php

namespace App\Filament\Resources\HoraireResource\Pages;

use App\Filament\Resources\HoraireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHoraire extends EditRecord
{
    protected static string $resource = HoraireResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
