<?php

namespace App\Filament\Resources\Traits;

use App\Models\Network;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;
use Filament\Resources\Table;
use Filament\Tables;

trait HasNetworks{

    public static function addNetworksAction($record) : Action
    {
        return Action::make('add Networks')
                    ->action(function ($record, array $data): void {
                        $record->networks()->attach([
                            $data['network_id'] => ['url' => $data['url']],
                        ]);
                    })
                    ->form([
                        self::getForm()
                    ])
                    ->icon('heroicon-s-pencil');
    }

    public static function networksAction($record) : Action
    {
        return Action::make('Networks')
                ->action(function ($record, array $data): void {
                    if(count($record->networks) >0){
                        $networks = [];
                        //dump($record->networks);
                        foreach($record->networks as $network){
                            if($data['delete'.$network->id]){
                                $record->networks()->detach($network->id);
                            }else{
                                $record->networks()->syncWithoutDetaching([
                                    $network->id => [
                                        'url' => $data['url'.$network->id],
                                        'network_id' => $data['network_id'.$network->id]
                                    ]
                                ]);
                            }
                        }
                        //dump($networks);
                        //$record->networks()->sync($networks);
                    }
                })
                ->form(function($record): array {
                    $networks_forms = [];
                    foreach($record->networks as $network){
                        $networks_forms[] = Grid::make()
                        ->schema([
                            Select::make('network_id'.$network->id)
                                ->options(Network::pluck('name', 'id'))
                                ->searchable()
                                ->preload()
                                ->default($network->id)
                                ->required()->label('Network'),
                                TextInput::make('url'.$network->id)->default($network->pivot->url)->required()->label('Url'),
                                Toggle::make('delete'.$network->id)->label('Delete')->inline(false),
                        ])->columns(3);
                    }
                    return $networks_forms;
                })
                ->visible(fn ($record): bool => count($record->networks) >0)
                ->icon('heroicon-s-pencil');
    }

    public static function getForm(){
        return Grid::make()
        ->schema([
            Select::make('network_id')
                ->options(Network::pluck('name', 'id'))
                ->searchable()
                ->preload()
                ->required(),
                TextInput::make('url')->required(),
        ])->columns(2);
    }

    public static function technologiesColumn()
    {
        return ViewColumn::make('networks')->view('tables.columns.tags-networks');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('url'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
