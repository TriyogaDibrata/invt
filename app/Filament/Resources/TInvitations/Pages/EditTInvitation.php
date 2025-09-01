<?php

namespace App\Filament\Resources\TInvitations\Pages;

use App\Filament\Resources\TInvitations\TInvitationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTInvitation extends EditRecord
{
    protected static string $resource = TInvitationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
