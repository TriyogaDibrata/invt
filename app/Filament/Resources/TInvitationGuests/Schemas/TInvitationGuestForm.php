<?php

namespace App\Filament\Resources\TInvitationGuests\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TInvitationGuestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('invitation_id')
                    ->required()
                    ->numeric(),
                TextInput::make('guest_name')
                    ->required(),
                TextInput::make('guest_email')
                    ->email(),
                TextInput::make('guest_phone')
                    ->tel(),
                Select::make('rsvp_status')
                    ->options(['pending' => 'Pending', 'accepted' => 'Accepted', 'declined' => 'Declined'])
                    ->default('pending')
                    ->required(),
            ]);
    }
}
