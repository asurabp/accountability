<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\IssuancesController;
use App\Http\Controllers\BuildUpsController;
use App\Http\Controllers\UsersController;

Route::view('/', 'welcome');
Route::view('view', 'view');
Route::resource('employees', EmployeesController::class);
Route::resource('items', ItemsController::class);
Route::resource('issuances', IssuancesController::class);
Route::resource('buildups', BuildUpsController::class);

// Rebuild this Employee->Users
Route::resource('users', UsersController::class);


// Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index']);
// Route::post('/login', [\App\Http\Controllers\LoginController::class, 'auth'])->name('login');
// Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
// Route::get('/register', [\App\Http\Controllers\LoginController::class, 'registerForm']);
// Route::post('/register', [\App\Http\Controllers\LoginController::class, 'register'])->name('register');
// Route::get('/user', [\App\Http\Controllers\LoginController::class, 'user'])->name('user');
