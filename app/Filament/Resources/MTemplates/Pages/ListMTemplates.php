<?php

namespace App\Filament\Resources\MTemplates\Pages;

use App\Filament\Resources\MTemplates\MTemplateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMTemplates extends ListRecords
{
    protected static string $resource = MTemplateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
