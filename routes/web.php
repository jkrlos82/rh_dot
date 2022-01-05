<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::get('/productos', [ProductosController::class, 'index']);
Route::post('/productos', [ProductosController::class, 'store']);
Route::get('/productos/create', [ProductosController::class, 'create']);
Route::get('/productos/{producto}', [ProductosController::class, 'show']);
Route::put('/productos/{producto}', [ProductosController::class, 'update']);
Route::get('/productos/{id}/edit', [ProductosController::class, 'edit']);
