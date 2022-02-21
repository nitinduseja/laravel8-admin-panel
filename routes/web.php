<?php

use Illuminate\Support\Facades\Auth;
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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('notifications/my', [App\Http\Controllers\NotificationConstroller::class, 'myNotifications'])->name('notifications.my');

Route::group(['middleware' => ['role:admin', 'auth']], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    });

    Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::resource('/roles', App\Http\Controllers\RoleController::class);
    Route::resource('/notifications', App\Http\Controllers\NotificationConstroller::class);
});

Route::group(['prefix' => 'employee', 'middleware' => 'role:employee'], function () {
    Route::get('/dashboard', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.dashboard');
});
