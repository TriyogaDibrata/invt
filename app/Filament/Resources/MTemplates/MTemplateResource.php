<?php

namespace App\Filament\Resources\MTemplates;

use App\Filament\Resources\MTemplates\Pages\CreateMTemplate;
use App\Filament\Resources\MTemplates\Pages\EditMTemplate;
use App\Filament\Resources\MTemplates\Pages\ListMTemplates;
use App\Filament\Resources\MTemplates\Schemas\MTemplateForm;
use App\Filament\Resources\MTemplates\Tables\MTemplatesTable;
use App\Models\MTemplate;
use BackedEnum;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Hexters\HexaLite\HasHexaLite;
use UnitEnum;

class MTemplateResource extends Resource
{
    use HasHexaLite;

    protected static ?string $model = MTemplate::class;

    protected static string|BackedEnum|null $navigationIcon = Phosphor::Browsers;

    protected static ?string $recordTitleAttribute = 'Template';

    protected static ?string $navigationLabel = 'Templates';

    protected static ?string $label = 'Template';

    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

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

    public function defineGates(): array
    {
        return [
            'template.index' => __('Allows viewing the template list'),
            'template.create' => __('Allows creating a new template'),
            'template.edit' => __('Allows updating templates'),
            'template.delete' => __('Allows deleting templates'),
        ];
    }
}
