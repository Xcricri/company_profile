<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PortofolioImageController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('pages', PageController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('portofolios', PortofolioController::class);
    Route::resource('portofolios.images', PortofolioImageController::class);
    Route::resource('contacts', ContactController::class);
});

require __DIR__ . '/settings.php';
