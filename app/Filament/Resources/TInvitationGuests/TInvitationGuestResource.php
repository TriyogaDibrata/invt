<?php

namespace App\Filament\Resources\TInvitationGuests;

use App\Filament\Resources\TInvitationGuests\Pages\CreateTInvitationGuest;
use App\Filament\Resources\TInvitationGuests\Pages\EditTInvitationGuest;
use App\Filament\Resources\TInvitationGuests\Pages\ListTInvitationGuests;
use App\Filament\Resources\TInvitationGuests\Schemas\TInvitationGuestForm;
use App\Filament\Resources\TInvitationGuests\Tables\TInvitationGuestsTable;
use App\Models\TInvitationGuest;
use BackedEnum;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Hexters\HexaLite\HasHexaLite;

class TInvitationGuestResource extends Resource
{
    use HasHexaLite;
    protected static ?string $model = TInvitationGuest::class;

    protected static string|BackedEnum|null $navigationIcon = Phosphor::UsersThree;

    protected static ?string $recordTitleAttribute = 'Guest';

    protected static ?string $navigationLabel = 'Invitation Guests';
    protected static ?string $label = 'Invitation Guest';

    public static function form(Schema $schema): Schema
    {
        return TInvitationGuestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TInvitationGuestsTable::configure($table);
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
            'index' => ListTInvitationGuests::route('/'),
            'create' => CreateTInvitationGuest::route('/create'),
            'edit' => EditTInvitationGuest::route('/{record}/edit'),
        ];
    }

    public function defineGates(): array
    {
        return [
            'guest.index' => __('Allows viewing the guest list'),
            'guest.create' => __('Allows creating a new guest'),
            'guest.edit' => __('Allows updating guests'),
            'guest.delete' => __('Allows deleting guests'),
        ];
    }
}
