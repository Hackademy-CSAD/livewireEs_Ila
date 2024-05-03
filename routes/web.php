<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/create/ bag work', [RecipeController::class, 'create'])->name('create.bag work');