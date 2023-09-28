<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ItemsController;


Route::view('/', 'welcome');
Route::view('view', 'view');
//Route::get('employees',[EmployeesController::class, 'index']);
//Route::get('employees/create',[EmployeesController::class, 'create']);
//Route::post('employees',[EmployeesController::class, 'store']);
//Route::get('employees/{employee}',[EmployeesController::class, 'show']);
//Route::get('employees/{employee}/edit',[EmployeesController::class, 'edit']);
//Route::patch('employees/{employee}',[EmployeesController::class, 'update']);
//Route::delete('employees/{employee}',[EmployeesController::class, 'destroy']);
Route::resource('employees', EmployeesController::class);


Route::resource('items', ItemsController::class);
//Route::get('items',[ItemsController::class, 'index']);
//Route::get('items/create',[ItemsController::class, 'create']);