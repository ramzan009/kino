<?php

use App\Http\Controllers\Web\Comment\CommentController;
use App\Http\Controllers\Web\Film\FilmController;
use App\Http\Controllers\Web\Login\LoginController;
use App\Http\Controllers\Web\Main\IndexController;
use App\Http\Controllers\Web\Profile\ProfileController;
use App\Http\Controllers\Web\Register\RegisterController;
use App\Http\Controllers\Web\Search\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'main'])->name('main');
Route::get('/film/{id}', [FilmController::class, 'film'])->name('film');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/register', [RegisterController::class, 'register' ])->name('register');
Route::post('/registration', [RegisterController::class, 'create' ])->name('registration_process');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login_process');
Route::get('/comment', [CommentController::class, 'index'])->name('comment');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile_edit');



