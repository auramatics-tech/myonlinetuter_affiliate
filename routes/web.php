<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/affiliate-admin', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin.home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
