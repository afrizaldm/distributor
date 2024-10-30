<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api;


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

Route::post('/auth/login', [Api\AuthController::class, 'login']);

Route::post('/users/updateOrCreate', [Api\UserController::class, 'updateOrCreate']);
Route::post('/users/updateWhere', [Api\UserController::class, 'updateWhere']);
Route::post('/users/deleteWhere', [Api\UserController::class, 'deleteWhere']);
Route::post('/users/query', [Api\UserController::class, 'query']);
Route::resource('/users', Api\UserController::class);

Route::post('/barbers/updateOrCreate', [Api\BarberController::class, 'updateOrCreate']);
Route::post('/barbers/updateWhere', [Api\BarberController::class, 'updateWhere']);
Route::post('/barbers/deleteWhere', [Api\BarberController::class, 'deleteWhere']);
Route::post('/barbers/query', [Api\BarberController::class, 'query']);
Route::resource('/barbers', Api\BarberController::class);

Route::post('/services/updateOrCreate', [Api\ServiceController::class, 'updateOrCreate']);
Route::post('/services/updateWhere', [Api\ServiceController::class, 'updateWhere']);
Route::post('/services/deleteWhere', [Api\ServiceController::class, 'deleteWhere']);
Route::post('/services/query', [Api\ServiceController::class, 'query']);
Route::resource('/services', Api\ServiceController::class);

Route::post('/stuffs/updateOrCreate', [Api\StuffController::class, 'updateOrCreate']);
Route::post('/stuffs/updateWhere', [Api\StuffController::class, 'updateWhere']);
Route::post('/stuffs/deleteWhere', [Api\StuffController::class, 'deleteWhere']);
Route::post('/stuffs/query', [Api\StuffController::class, 'query']);
Route::resource('/stuffs', Api\StuffController::class);

Route::post('/transactions/updateOrCreate', [Api\TransactionController::class, 'updateOrCreate']);
Route::post('/transactions/updateWhere', [Api\TransactionController::class, 'updateWhere']);
Route::post('/transactions/deleteWhere', [Api\TransactionController::class, 'deleteWhere']);
Route::post('/transactions/query', [Api\TransactionController::class, 'query']);
Route::resource('/transactions', Api\TransactionController::class);

Route::post('/transactions/services/updateOrCreate', [Api\DetailServiceTransactionController::class, 'updateOrCreate']);
Route::post('/transactions/services/updateWhere', [Api\DetailServiceTransactionController::class, 'updateWhere']);
Route::post('/transactions/services/deleteWhere', [Api\DetailServiceTransactionController::class, 'deleteWhere']);
Route::post('/transactions/services/query', [Api\DetailServiceTransactionController::class, 'query']);
Route::resource('/transactions/services', Api\DetailServiceTransactionController::class);

Route::post('/transactions/stuffs/updateOrCreate', [Api\DetailStuffTransactionController::class, 'updateOrCreate']);
Route::post('/transactions/stuffs/updateWhere', [Api\DetailStuffTransactionController::class, 'updateWhere']);
Route::post('/transactions/stuffs/deleteWhere', [Api\DetailStuffTransactionController::class, 'deleteWhere']);
Route::post('/transactions/stuffs/query', [Api\DetailStuffTransactionController::class, 'query']);
Route::resource('/transactions/stuffs', Api\DetailStuffTransactionController::class);

Route::post('/staffs/updateOrCreate', [Api\StaffController::class, 'updateOrCreate']);
Route::post('/staffs/updateWhere', [Api\StaffController::class, 'updateWhere']);
Route::post('/staffs/deleteWhere', [Api\StaffController::class, 'deleteWhere']);
Route::post('/staffs/query', [Api\StaffController::class, 'query']);
Route::resource('/staffs', Api\StaffController::class);

Route::post('/roles/updateOrCreate', [Api\RoleController::class, 'updateOrCreate']);
Route::post('/roles/updateWhere', [Api\RoleController::class, 'updateWhere']);
Route::post('/roles/deleteWhere', [Api\RoleController::class, 'deleteWhere']);
Route::post('/roles/query', [Api\RoleController::class, 'query']);
Route::resource('/roles', Api\RoleController::class);

// Route::middleware(['auth:sanctum'])->group(function () {

// });

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/auth/logout', [Api\AuthController::class, 'logout']);
    Route::post('/auth/user', [Api\AuthController::class, 'user']);
    Route::post('/auth/pin', [Api\AuthController::class, 'pin']);
    
});
