<?php

use App\Http\Controllers\ActionsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('welcome');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/cv', [PageController::class, 'cv'])->name('cv');
Route::get('/bionic', [PageController::class, 'bionic'])->name('bionic');
Route::post('/bionic', [ActionsController::class, 'bionicConvert']);
