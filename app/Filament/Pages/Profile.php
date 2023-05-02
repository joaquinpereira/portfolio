<?php

namespace App\Filament\Pages;

use App\Models\Job;
use App\Models\Reference;
use App\Models\Technology;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\Action;
use Filament\Forms;

use App\Models\User;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Pages\Page;

use Barryvdh\DomPDF\Facade\Pdf;
class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.profile';

    public $model = User::class;

    public function mount(): void
    {
        $this->model = auth()->user();
    }

    protected function getActions(): array
    {
        return [
            $this->updateProfileAction($this->model),
            $this->getProfilePdfAction()
        ];
    }

    public static function getProfilePdfAction(): Action
    {
        return Action::make('profile_pdf')
            ->link(fn() => route('profile.pdf'))
            ->openUrlInNewTab()
        ;
    }

    public static function updateProfileAction($record) : Action
    {
        return Action::make('update_profile')
            ->action(function (array $data): void {
                $model = auth()->user();
                $model->update([
                    'name' => $data['name'],
                    'address' =>  $data['address'],
                    'telf' => $data['telf'],
                    'profession' => $data['profession'],
                    'about_short' => $data['about_short'],
                    'avatar' => $data['avatar'],
                    'zip_code' => $data['zip_code'],
                    'about_long' => $data['about_long'],
                ]);
            })
            ->mountUsing(fn (Forms\ComponentContainer $form) => $form->fill([
                'name' => $record->name,
                'address' => $record->address,
                'telf' => $record->telf,
                'profession' => $record->profession,
                'about_long' => $record->about_long,
                'about_short' => $record->about_short,
                'avatar' => $record->avatar,
                'zip_code' => $record->zip_code,
            ]))
            ->form([
                Tabs::make('Heading')->tabs([
                    Tabs\Tab::make('Profile')->schema([
                        FileUpload::make('avatar')->image(),
                        Grid::make()
                            ->schema([
                                TextInput::make('name')->required()->label('Name'),
                                TextInput::make('address')->required()->label('Address'),
                                TextInput::make('telf')->required()->label('Phone'),
                                TextInput::make('profession')->required()->label('Profession'),
                                TextInput::make('zip_code')->required()->label('Zip code'),
                            ])
                            ->columns(2),
                    ]),
                    Tabs\Tab::make('About')->schema([
                        Textarea::make('about_short')->required()->label('About'),
                        RichEditor::make('about_long')->label('About long')
                    ]),
                ])
            ]);
    }

    public function downloadPdf(){

        $user = User::find(1)->first();

        $techs = Technology::all();

        return view('layouts.pdfcv', [
            'user' => $user,
            'techs' => $techs,
            'jobs' => $user->jobs,
            'references' => $user->references,
            'educations' => $user->educations,
        ]);

        // return PDF::loadView('layouts.pdfcv', [
        //     'user' => $user,
        //     'techs' => $techs
        // ])
        //  ->stream('archivo.pdf');

        //return SnappyPDF::loadView('layouts.pdfcv')->inline('a.pdf');
    }
}
