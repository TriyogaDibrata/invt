<?php

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages\CreateUser;
use App\Filament\Resources\Users\Pages\EditUser;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Filament\Resources\Users\Schemas\UserForm;
use App\Filament\Resources\Users\Tables\UsersTable;
use App\Models\User;
use BackedEnum;
use Filafly\Icons\Phosphor\Enums\Phosphor;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Hexters\HexaLite\HasHexaLite;
use UnitEnum;

class UserResource extends Resource
{
    use HasHexaLite;

    protected static ?string $model = User::class;

    protected static string|BackedEnum|null $navigationIcon = Phosphor::Users;

    protected static ?string $recordTitleAttribute = 'User';

    protected static UnitEnum|string|null $navigationGroup = 'Settings';

    protected static ?string $navigationLabel = 'Users';

    protected static ?string $label = 'Users';


    public static function form(Schema $schema): Schema
    {
        return UserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UsersTable::configure($table);
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }

    public function defineGates(): array
    {
        return [
            'user.index' => __('Allows viewing the user list'),
            'user.create' => __('Allows creating a new user'),
            'user.edit' => __('Allows updating users'),
            'user.delete' => __('Allows deleting users'),
        ];
    }
}
