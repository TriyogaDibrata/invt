<?php

namespace App\Filament\Resources\TInvitationComments;

use App\Filament\Resources\TInvitationComments\Pages\CreateTInvitationComment;
use App\Filament\Resources\TInvitationComments\Pages\EditTInvitationComment;
use App\Filament\Resources\TInvitationComments\Pages\ListTInvitationComments;
use App\Filament\Resources\TInvitationComments\Schemas\TInvitationCommentForm;
use App\Filament\Resources\TInvitationComments\Tables\TInvitationCommentsTable;
use App\Models\TInvitationComment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TInvitationCommentResource extends Resource
{
    protected static ?string $model = TInvitationComment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Comment';
    protected static ?string $navigationLabel = 'Invitation Comments';
    protected static ?string $label = 'Invitation Comment';

    public static function form(Schema $schema): Schema
    {
        return TInvitationCommentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TInvitationCommentsTable::configure($table);
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
            'index' => ListTInvitationComments::route('/'),
            'create' => CreateTInvitationComment::route('/create'),
            'edit' => EditTInvitationComment::route('/{record}/edit'),
        ];
    }
}
