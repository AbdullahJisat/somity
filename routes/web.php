<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::prefix('user')->controller('UserController')->name('user.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('{id}/show', 'show')->name('show');
        Route::post('{id}/update', 'update')->name('update');
        Route::post('reset-password', 'resetPassword')->name('reset_password');
    });
    Route::resource('transaction', 'TransactionController')->except('update');
    Route::post('transaction/update', 'TransactionController@update')->name('transaction.update');
    Route::resource('role', 'RoleController');
    Route::get('{id}/role-permission', 'RoleController@rolePermission')->name('role.permission');
    Route::post('{id}/store-role-permission', 'RoleController@storeRolePermission')->name('role.store_permission');
    Route::resource('permission', 'PermissionController');
});
