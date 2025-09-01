<?php

namespace App\Filament\Resources\TInvitationGuests\Pages;

use App\Filament\Resources\TInvitationGuests\TInvitationGuestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTInvitationGuests extends ListRecords
{
    protected static string $resource = TInvitationGuestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
