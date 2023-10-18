<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentTypeController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\LoanTextController;
use App\Http\Controllers\EquipmentLoanController;
use App\Http\Controllers\UserController;

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

// System routes
Route::resource('equipmenttypes', EquipmentTypeController::class);
Route::resource('equipments', EquipmentController::class);
Route::resource('collaborators', CollaboratorController::class);
Route::resource('loantexts', LoanTextController::class);
Route::resource('equipmentloans', EquipmentLoanController::class);
Route::resource('user', UserController::class);
