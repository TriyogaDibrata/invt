<?php

namespace App\Filament\Resources\TInvitationCustomFields\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TInvitationCustomFieldForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('invitation_id')
                    ->required()
                    ->numeric(),
                TextInput::make('field_name')
                    ->required(),
                TextInput::make('field_value'),
            ]);
    }
}
