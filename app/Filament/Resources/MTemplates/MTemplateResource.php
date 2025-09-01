<?php

namespace App\Filament\Resources\MTemplates;

use App\Filament\Resources\MTemplates\Pages\CreateMTemplate;
use App\Filament\Resources\MTemplates\Pages\EditMTemplate;
use App\Filament\Resources\MTemplates\Pages\ListMTemplates;
use App\Filament\Resources\MTemplates\Schemas\MTemplateForm;
use App\Filament\Resources\MTemplates\Tables\MTemplatesTable;
use App\Models\MTemplate;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MTemplateResource extends Resource
{
    protected static ?string $model = MTemplate::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Template';

    protected static ?string $navigationLabel = 'Templates';

    protected static ?string $label = 'Template';

    public static function form(Schema $schema): Schema
    {
        return MTemplateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MTemplatesTable::configure($table);
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
            'index' => ListMTemplates::route('/'),
            'create' => CreateMTemplate::route('/create'),
            'edit' => EditMTemplate::route('/{record}/edit'),
        ];
    }
}
