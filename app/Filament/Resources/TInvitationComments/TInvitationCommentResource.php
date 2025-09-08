<?php

namespace App\Filament\Resources\TInvitationComments;

use App\Filament\Resources\TInvitationComments\Pages\CreateTInvitationComment;
use App\Filament\Resources\TInvitationComments\Pages\EditTInvitationComment;
use App\Filament\Resources\TInvitationComments\Pages\ListTInvitationComments;
use App\Filament\Resources\TInvitationComments\Schemas\TInvitationCommentForm;
use App\Filament\Resources\TInvitationComments\Tables\TInvitationCommentsTable;
use App\Models\TInvitationComment;
use BackedEnum;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Hexters\HexaLite\HasHexaLite;

class TInvitationCommentResource extends Resource
{
    use HasHexaLite;
    protected static ?string $model = TInvitationComment::class;

    protected static string|BackedEnum|null $navigationIcon = Phosphor::ChatTeardropText;

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

    public function defineGates(): array
    {
        return [
            'comment.index' => __('Allows viewing the comment list'),
            'comment.create' => __('Allows creating a new comment'),
            'comment.edit' => __('Allows updating comments'),
            'comment.delete' => __('Allows deleting comments'),
        ];
    }
}
