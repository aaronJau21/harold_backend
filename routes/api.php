<?php

use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BusinesController;
use App\Http\Controllers\CajaController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [loginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);

// Drivers
Route::post('driverStore', [DriverController::class, 'storeDriver']);
Route::get('drivers/{sucursal_id?}', [DriverController::class, 'getDriver']);
Route::get('drivers-select', [DriverController::class, 'getDriverSelect']);

// Users
Route::get('user/{sucursal_id?}', [UserController::class, 'getUsers']);

// Sucursales
Route::get('getSucursal', [SucursalController::class, 'getSucursal']);


// caja_repartidor
Route::post('caja', [CajaController::class, 'caja']);
Route::get('get_caja_repartidor/{sucursal_id?}/{fecha?}', [CajaController::class, 'get_caja_repartidor']);
Route::post('caja_repartidor', [CajaController::class, 'caja_repartidor']);
Route::put('updateEstado/{id}', [CajaController::class, 'updateEstado']);
Route::delete('delete_caja_repartidor/{id}', [CajaController::class, 'delete']);
Route::get('get_caja/{fecha?}/{sucursal?}', [CajaController::class, 'buscar']);

// Detalles
Route::get('detalles', [DetalleController::class, 'getDetalles']);


// Busines
Route::get('busines/{sucursal_id?}', [BusinesController::class, 'getBusines']);
