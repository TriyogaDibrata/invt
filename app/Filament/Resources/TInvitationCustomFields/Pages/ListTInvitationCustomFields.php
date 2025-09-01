<?php

namespace App\Filament\Resources\TInvitationCustomFields\Pages;

use App\Filament\Resources\TInvitationCustomFields\TInvitationCustomFieldResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTInvitationCustomFields extends ListRecords
{
    protected static string $resource = TInvitationCustomFieldResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
