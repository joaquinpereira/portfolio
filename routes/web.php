<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use  App\Filament\Pages\Profile;
use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\App;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome',['user' => User::find(1)->first(), 'locale' => App::getLocale()]);
});

Route::get('/profile_pdf',[Profile::class, 'downloadPdf'])->name('profile.pdf');

Route::get('lang/{locale}', [LocalizationController::class, 'index']);
