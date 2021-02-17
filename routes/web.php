<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\YahtzeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/rubik', [PageController::class, 'rubiksCube'])->name('rubiks_cube');
Route::get('/mvc-lite', [PageController::class, 'mvcLite'])->name('mvc_lite');

Route::group(['prefix' => '/yahtzee'], function () {
    Route::get('/', [PageController::class, 'yahtzee'])->name('yahtzee');
    Route::post('/create', [YahtzeeController::class, 'create'])->name('yahtzee_create');
    Route::delete('/delete', [YahtzeeController::class, 'destroy'])->name('yahtzee_delete');
});
