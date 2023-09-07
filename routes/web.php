<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PersonalInformationController;
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
    Route::get('/personalinformation', [PersonalInformationController::class, 'edit'])->name('personalinformation.edit');
    Route::patch('/personalinformation', [PersonalInformationController::class, 'update'])->name('personalinformation.update');
});

require __DIR__.'/auth.php';
