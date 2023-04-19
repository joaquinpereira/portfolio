<?php

namespace App\Filament\Resources\Traits;

use App\Models\Technology;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TagsColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;

trait HasTechnologies
{
    public static function formTechnologiesField() : Select
    {
        return self::technologiesField()
            ->relationship('technologies', 'name');
    }

    public static function technologiesField() : Select
    {
        return Select::make('technologies')
            ->options(Technology::pluck('name', 'id'))
            ->multiple()
            ->searchable()
            ->preload()
            ->createOptionForm([
                Toggle::make('is_published'),
                Grid::make(3)
                    ->schema([
                        TextInput::make('name')->lazy()
                            ->afterStateUpdated(fn ($set, $state) => $set('name', ucfirst($state)))
                            ->required(),
                        TextInput::make('expertise')->default(0)->numeric(),
                        TextInput::make('icon')->required(),
                ]),
                Textarea::make('description')->required(),
                FileUpload::make('image')->image(),
            ]);
    }

    public static function changeTechnologiesAction() : BulkAction
    {
        return BulkAction::make('Technologies')
                    ->action(function (Collection $records, array $data): void {
                        foreach ($records as $record) {
                            $record->technologies()->{$data['action']}($data['technologies']);
                        }
                    })
                    ->form([
                        self::getForm()
                    ])
                    ->icon('heroicon-s-pencil');
    }

    public static function technologiesAction($record) : Action
    {
        return Action::make('Technologies')
                    ->action(function ($record, array $data): void {
                        $record->technologies()->{$data['action']}($data['technologies']);
                    })
                    ->form([
                        self::getForm()
                    ])
                    ->icon('heroicon-s-pencil');
    }

    public static function technologiesColumn() : TagsColumn
    {
        return TagsColumn::make('technologies.name')
            ->limit(3);
    }

    public static function getForm(){
        return Grid::make()
        ->schema([
            Select::make('action')
                ->label('For selected records')
                ->options([
                    'attach' => 'add',
                    'detach' => 'remove',
                    'sync' => 'overwrite',
                ])
                ->default('sync')
                ->required(),

            self::technologiesField(),

        ])->columns(2);
    }

}
