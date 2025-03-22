<?php

use App\Http\Controllers\Web\Film\FilmController;
use App\Http\Controllers\Web\Main\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/films', [FilmController::class, 'film'])->name('film');
