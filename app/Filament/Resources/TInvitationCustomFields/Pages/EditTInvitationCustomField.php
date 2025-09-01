<?php

namespace App\Filament\Resources\TInvitationCustomFields\Pages;

use App\Filament\Resources\TInvitationCustomFields\TInvitationCustomFieldResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTInvitationCustomField extends EditRecord
{
    protected static string $resource = TInvitationCustomFieldResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
