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
Auth::routes();
Route::get('/signup', [App\Http\Controllers\Admin\LoginController::class, 'signup'])->name('admin.signup');
Route::post('/', [App\Http\Controllers\Admin\LoginController::class, 'authenticate'])->name('admin.login');
Route::post('/admin-signup', [App\Http\Controllers\Admin\LoginController::class, 'admin_register'])->name('admin.register');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    //
    Route::get('/update-profile', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.update_profile');
    Route::post('/updateprofilephoto', [App\Http\Controllers\Admin\AdminController::class, 'updateprofilephoto'])->name('admin.updateprofilephoto');
    Route::post('/update-password', [App\Http\Controllers\Admin\AdminController::class, 'change_password'])->name('admin.change_password');
    Route::post('/update-email', [App\Http\Controllers\Admin\AdminController::class, 'update_email'])->name('admin.update_email');
    Route::post('/update-user-account-detail', [App\Http\Controllers\Admin\AdminController::class, 'update_user_account_detail'])->name('admin.update_user_account_detail');
});

