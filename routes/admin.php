<?php

use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('admin.login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::middleware('auth:admin')->name('admin.')->group(function () {

    Route::resource('dashboard', HomeController::class)
        ->only(['index']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
