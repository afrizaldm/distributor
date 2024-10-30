<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api;
use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/ping', [Controllers\AppController::class, 'ping']);
Route::post('/auth/login', [Api\AuthController::class, 'login']);
Route::resource('/catalogs', Api\CatalogController::class);
Route::resource('/distributions', Api\DistributorController::class);


// Route::middleware(['auth:sanctum'])->group(function () {

// });

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/auth/logout', [Api\AuthController::class, 'logout']);
    Route::post('/auth/user', [Api\AuthController::class, 'user']);
    
});
