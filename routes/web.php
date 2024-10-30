<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AppController::class, 'main']);
Route::get('/app', [AppController::class, 'main']);
Route::get('/app/{any}', [AppController::class, 'main'])->where('any', '.*');