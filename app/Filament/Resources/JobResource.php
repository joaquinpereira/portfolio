<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Filament\Resources\Traits\HasTechnologies;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobResource extends Resource
{
    use HasTechnologies;

    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->columns(1)->schema([
            Grid::make(2)
                ->schema([
                    self::formTechnologiesField(),
                    Forms\Components\TextInput::make('position')->required(),
                    Forms\Components\TextInput::make('company')->required(),
                    Forms\Components\TextInput::make('web_company'),
                    Forms\Components\DatePicker::make('start_date')->required(),
                    Forms\Components\DatePicker::make('end_date'),
            ]),
            Forms\Components\Textarea::make('description')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('position')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('company')->sortable()->searchable(),
                self::technologiesColumn(),
            ])
            ->filters([
                //
            ])
            ->actions([
                self::technologiesAction(Job::class),
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
            'index' => Pages\ListJobs::route('/'),
        ];
    }
}
