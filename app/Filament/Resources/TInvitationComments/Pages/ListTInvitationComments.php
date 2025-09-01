<?php

namespace App\Filament\Resources\TInvitationComments\Pages;

use App\Filament\Resources\TInvitationComments\TInvitationCommentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTInvitationComments extends ListRecords
{
    protected static string $resource = TInvitationCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
