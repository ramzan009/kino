<?php

use App\Http\Controllers\Web\Main\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'main'])->name('main');
