<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('welcome');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/cv', [PageController::class, 'cv'])->name('cv');
