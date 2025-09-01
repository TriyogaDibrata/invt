<?php

namespace App\Filament\Resources\TInvitationGuests;

use App\Filament\Resources\TInvitationGuests\Pages\CreateTInvitationGuest;
use App\Filament\Resources\TInvitationGuests\Pages\EditTInvitationGuest;
use App\Filament\Resources\TInvitationGuests\Pages\ListTInvitationGuests;
use App\Filament\Resources\TInvitationGuests\Schemas\TInvitationGuestForm;
use App\Filament\Resources\TInvitationGuests\Tables\TInvitationGuestsTable;
use App\Models\TInvitationGuest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TInvitationGuestResource extends Resource
{
    protected static ?string $model = TInvitationGuest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

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
}
