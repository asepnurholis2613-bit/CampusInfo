<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArchitectureController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/program-studi', [HomeController::class, 'programStudi'])
    ->name('program-studi');

Route::get('/kontak', [HomeController::class, 'kontak'])
    ->name('kontak');

Route::get('/architecture', [ArchitectureController::class, 'dashboard'])
    ->name('architecture');

Route::get('/lifecycle', [ArchitectureController::class, 'lifecycle'])
    ->name('lifecycle');

Route::get('/environment', [ArchitectureController::class, 'environment'])
    ->name('environment');