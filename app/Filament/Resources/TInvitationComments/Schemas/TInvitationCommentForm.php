<?php

namespace App\Filament\Resources\TInvitationComments\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TInvitationCommentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('invitation_id')
                    ->required()
                    ->numeric(),
                TextInput::make('parent_id')
                    ->numeric(),
                TextInput::make('commenter_name')
                    ->required(),
                Textarea::make('comment_text')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['visible' => 'Visible', 'hidden' => 'Hidden'])
                    ->default('visible')
                    ->required(),
            ]);
    }
}
