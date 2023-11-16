<?php

use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BusinesController;
use App\Http\Controllers\CajaController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\UserController;
use App\Models\Admin;
use App\Models\User;
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
Route::post('drivers-desactive/{id}', [DriverController::class, 'delete']);

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
Route::put('cerrar-Caja/{id}', [CajaController::class, 'cerrarCaja']);

// Detalles
Route::get('detalles', [DetalleController::class, 'getDetalles']);


// Busines
Route::get('busines/{sucursal_id?}', [BusinesController::class, 'getBusines']);


// Extraer
Route::get('admins', function () {
    $admins = Admin::get();

    foreach ($admins as $admin) {
        // Verificar si ya existe un usuario con el mismo correo electrónico
        $existingUser = User::where('email', $admin->email)->first();

        if (!$existingUser) {
            // Crear un nuevo usuario solo si no existe uno con el mismo correo electrónico
            User::create([
                'f_name' => $admin->f_name,
                'l_name' => $admin->l_name,
                'phone' => $admin->phone,
                'email' => $admin->email,
                'image' => $admin->image,
                'password' => $admin->password,
                'created_at' => $admin->created_at,
                'sucursal_id' => $admin->zone_id,
                'role_id' => $admin->role_id,
            ]);
        }
    }

    $users = User::get();

    return response()->json([
        'admins' => $users
    ]);
});
