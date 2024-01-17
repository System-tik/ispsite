<?php

namespace App\Filament\Resources\PourquoiResource\Pages;

use App\Filament\Resources\PourquoiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPourquois extends ListRecords
{
    protected static string $resource = PourquoiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
