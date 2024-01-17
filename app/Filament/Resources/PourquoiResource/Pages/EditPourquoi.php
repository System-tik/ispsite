<?php

namespace App\Filament\Resources\PourquoiResource\Pages;

use App\Filament\Resources\PourquoiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPourquoi extends EditRecord
{
    protected static string $resource = PourquoiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
