<?php

namespace App\Filament\Resources\TInvitations\Schemas;

use App\Models\MTemplate;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class TInvitationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric()
                    ->hidden()
                    ->default(fn() => Auth::id()),
                Select::make('template_id')
                    ->label('Template')
                    ->placeholder('Select a template')
                    ->options(MTemplate::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                DatePicker::make('event_date')
                    ->minDate(fn() => now())
                    ->native(false)
                    ->required(),
                TimePicker::make('event_time')
                    ->native(false)
                    ->required(),
                DateTimePicker::make('event_date_time')
                    ->native(false)
                    ->minDate(fn() => now())
                    ->required(),
                TextInput::make('location'),
                TextInput::make('location_url'),
                TextInput::make('slug')
                    ->required(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'published' => 'Published', 'archived' => 'Archived'])
                    ->default('draft')
                    ->required(),
            ]);
    }
}
