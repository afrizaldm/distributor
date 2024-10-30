<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AppController::class, 'main']);
Route::get('/app', [AppController::class, 'main']);
Route::get('/app/{any}', [AppController::class, 'main'])->where('any', '.*');