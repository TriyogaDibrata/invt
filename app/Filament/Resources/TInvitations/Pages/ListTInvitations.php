<?php

namespace App\Filament\Resources\TInvitations\Pages;

use App\Filament\Resources\TInvitations\TInvitationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTInvitations extends ListRecords
{
    protected static string $resource = TInvitationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
