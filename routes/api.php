<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [App\Http\Controllers\Api\AuthController::class, 'user'])->name('api.user');
});
Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register'])->name('api.register');
Route::post('/update-ref-history', [App\Http\Controllers\Api\RefHistoryController::class, 'update_ref_history'])->name('api.update_ref_history');
