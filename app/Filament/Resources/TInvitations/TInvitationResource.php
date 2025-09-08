<?php

namespace App\Filament\Resources\TInvitations;

use App\Filament\Resources\TInvitations\Pages\CreateTInvitation;
use App\Filament\Resources\TInvitations\Pages\EditTInvitation;
use App\Filament\Resources\TInvitations\Pages\ListTInvitations;
use App\Filament\Resources\TInvitations\Schemas\TInvitationForm;
use App\Filament\Resources\TInvitations\Tables\TInvitationsTable;
use App\Models\TInvitation;
use BackedEnum;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Hexters\HexaLite\HasHexaLite;

class TInvitationResource extends Resource
{
    use HasHexaLite;
    protected static ?string $model = TInvitation::class;

    protected static string|BackedEnum|null $navigationIcon = Phosphor::EnvelopeSimple;

    protected static ?string $recordTitleAttribute = 'Invitation';

    protected static ?string $navigationLabel = 'Invitations';

    protected static ?string $label = 'Invitation';

    public static function form(Schema $schema): Schema
    {
        return TInvitationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TInvitationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTInvitations::route('/'),
            'create' => CreateTInvitation::route('/create'),
            'edit' => EditTInvitation::route('/{record}/edit'),
        ];
    }

    public function defineGates(): array
    {
        return [
            'invitation.index' => __('Allows viewing the invitation list'),
            'invitation.create' => __('Allows creating a new invitation'),
            'invitation.edit' => __('Allows updating invitations'),
            'invitation.delete' => __('Allows deleting invitations'),
        ];
    }
}
