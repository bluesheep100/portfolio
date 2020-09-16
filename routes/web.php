<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/rubik', [PageController::class, 'rubiksCube'])->name('rubiks_cube');
Route::get('/mvc-lite', [PageController::class, 'mvcLite'])->name('mvc_lite');
