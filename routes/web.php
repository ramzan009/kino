<?php

use App\Http\Controllers\Web\Film\FilmController;
use App\Http\Controllers\Web\Login\LoginController;
use App\Http\Controllers\Web\Main\MainController;
use App\Http\Controllers\Web\Register\RegisterController;
use App\Http\Controllers\Web\Search\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/films', [FilmController::class, 'film'])->name('film');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/register', [RegisterController::class, 'register' ])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('login');
