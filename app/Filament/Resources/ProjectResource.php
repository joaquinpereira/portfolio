<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Traits\HasTechnologies;

class ProjectResource extends Resource
{
    use HasTechnologies;

    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->columns(1)->schema([
                    self::formTechnologiesField(),
                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\TextInput::make('excerpt')->required(),
                    Forms\Components\Textarea::make('description')->required(),
                    Forms\Components\TextInput::make('url')->url(),
                    Forms\Components\TextInput::make('url_github')->url(),
                    Forms\Components\TextInput::make('banner')->url(),
                    //FileUpload::make('banner')->image()
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('excerpt')->limit(50),
                Tables\Columns\ImageColumn::make('banner'),
                self::technologiesColumn(),
            ])
            ->filters([
                //
            ])
            ->actions([
                self::technologiesAction(Project::class),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                self::changeTechnologiesAction(),
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListProjects::route('/'),
        ];
    }
}
