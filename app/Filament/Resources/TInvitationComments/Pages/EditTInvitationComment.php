<?php

namespace App\Filament\Resources\TInvitationComments\Pages;

use App\Filament\Resources\TInvitationComments\TInvitationCommentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTInvitationComment extends EditRecord
{
    protected static string $resource = TInvitationCommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
