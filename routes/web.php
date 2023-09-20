<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PersonalinformationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get("locale/{lang}", [LocalizationController::class, 'setLang']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // CV - Personal Information
    Route::get('/personalinformation', [PersonalinformationController::class, 'edit'])->name('personalinformation.edit');
    Route::patch('/personalinformation', [PersonalinformationController::class, 'update'])->name('personalinformation.update');
    // CV - Language
//    Route::get('/language', [LanguageController::class, 'index'])->name('language.index');
//    Route::get('/language', [LanguageController::class, 'edit'])->name('language.edit');
//    Route::patch('/language', [LanguageController::class, 'update'])->name('language.update');
    Route::resource('language', LanguageController::class);
});

require __DIR__.'/auth.php';
