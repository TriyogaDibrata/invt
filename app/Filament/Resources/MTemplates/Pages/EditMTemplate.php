<?php

namespace App\Filament\Resources\MTemplates\Pages;

use App\Filament\Resources\MTemplates\MTemplateResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMTemplate extends EditRecord
{
    protected static string $resource = MTemplateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
