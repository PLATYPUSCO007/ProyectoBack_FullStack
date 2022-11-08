<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\EstacionamientoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas de VEHICULO
Route::get('vehiculos', [VehiculoController::class, 'index']);
Route::get('vehiculos/{placa}', [VehiculoController::class, 'show']);
Route::post('vehiculos', [VehiculoController::class, 'store']);
Route::put('vehiculos/{placa}', [VehiculoController::class, 'update']);
Route::delete('vehiculos/{placa}', [VehiculoController::class, 'destroy']);

//Rutas de Tipos
Route::get('tipos', [TipoVehiculoController::class, 'index']);
Route::post('tipos', [TipoVehiculoController::class, 'store']);
Route::put('tipos/{id}', [TipoVehiculoController::class, 'update']);
Route::delete('tipos/{id}', [TipoVehiculoController::class, 'destroy']);

//Rutas de Estacionamiento
Route::get('estacionamiento', [EstacionamientoController::class, 'index']);
Route::get('estacionamiento/{id}', [EstacionamientoController::class, 'show']);
Route::post('estacionamiento', [EstacionamientoController::class, 'store']);
Route::put('estacionamiento/{id}', [EstacionamientoController::class, 'update']);
Route::delete('estacionamiento/{id}', [EstacionamientoController::class, 'destroy']);
