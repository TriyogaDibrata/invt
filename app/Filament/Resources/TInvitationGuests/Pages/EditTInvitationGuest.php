<?php

namespace App\Filament\Resources\TInvitationGuests\Pages;

use App\Filament\Resources\TInvitationGuests\TInvitationGuestResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTInvitationGuest extends EditRecord
{
    protected static string $resource = TInvitationGuestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
