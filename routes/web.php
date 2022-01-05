<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\CuentasxpagarController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\CuentasxcobrarController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\CierresController;
use App\Http\Controllers\InventariosController;
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

Route::get('/compras/create', [ComprasController::class, 'create']);

Route::get('/cuentasxpagar/list', [CuentasxpagarController::class, 'list']);

Route::get('/ventas/create', [VentasController::class, 'create']);

Route::get('/cuentasxcobrar/list', [CuentasxcobrarController::class, 'list']);

Route::get('/clientes/create', [ClientesController::class, 'create']);
Route::get('/clientes/{id}', [ClientesController::class, 'show']);

Route::get('/proveedores/create', [ProveedoresController::class, 'create']);
Route::get('/proveedores/{id}', [ProveedoresController::class, 'show']);

Route::get('/productos', [ProductosController::class, 'index']);
Route::post('/productos', [ProductosController::class, 'store']);
Route::get('/productos/create', [ProductosController::class, 'create']);
Route::get('/productos/{producto}', [ProductosController::class, 'show']);
Route::put('/productos/{producto}', [ProductosController::class, 'update']);
Route::get('/productos/{id}/edit', [ProductosController::class, 'edit']);

Route::get('/gastos/create', [GastosController::class, 'create']);

Route::get('/cierres', [CierresController::class, 'index']);

Route::get('/inventarios', [InventariosController::class, 'index']);
