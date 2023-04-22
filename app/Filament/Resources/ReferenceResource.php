<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReferenceResource\Pages;
use App\Filament\Resources\ReferenceResource\RelationManagers;
use App\Filament\Resources\Traits\HasNetworks;
use App\Models\Reference;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReferenceResource extends Resource
{
    use HasNetworks;

    protected static ?string $model = Reference::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->columns(1)->schema([
            Grid::make(2)
                ->schema([
                    Toggle::make('show_cv'),
                    Toggle::make('show_portfolio'),
                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\TextInput::make('position')->required(),
                    Forms\Components\TextInput::make('telf')->required(),
                    Forms\Components\TextInput::make('web_company'),
            ]),
            Forms\Components\Textarea::make('testimonial'),
            FileUpload::make('picture')->image()
        ]);
    }

    public static function table(Table $table): Table
    {
        Filament::registerStyles([
            'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        ]);

        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('position')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('picture'),
                self::technologiesColumn(),
            ])
            ->filters([
                //
            ])
            ->actions([
                self::addNetworksAction(Reference::class),
                self::networksAction(Reference::class),
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])->label("actions"),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\NetworksRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReferences::route('/'),
            //'create' => Pages\CreateReference::route('/create'),
            'edit' => Pages\EditReference::route('/{record}/edit'),
        ];
    }
}
