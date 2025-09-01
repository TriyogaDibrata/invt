<?php

namespace App\Filament\Resources\TInvitationCustomFields;

use App\Filament\Resources\TInvitationCustomFields\Pages\CreateTInvitationCustomField;
use App\Filament\Resources\TInvitationCustomFields\Pages\EditTInvitationCustomField;
use App\Filament\Resources\TInvitationCustomFields\Pages\ListTInvitationCustomFields;
use App\Filament\Resources\TInvitationCustomFields\Schemas\TInvitationCustomFieldForm;
use App\Filament\Resources\TInvitationCustomFields\Tables\TInvitationCustomFieldsTable;
use App\Models\TInvitationCustomField;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TInvitationCustomFieldResource extends Resource
{
    protected static ?string $model = TInvitationCustomField::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Custom Field';
    protected static ?string $navigationLabel = 'Invitation Custom Fields';
    protected static ?string $label = 'Invitation Custom Field';

    public static function form(Schema $schema): Schema
    {
        return TInvitationCustomFieldForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TInvitationCustomFieldsTable::configure($table);
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
            'index' => ListTInvitationCustomFields::route('/'),
            'create' => CreateTInvitationCustomField::route('/create'),
            'edit' => EditTInvitationCustomField::route('/{record}/edit'),
        ];
    }
}
