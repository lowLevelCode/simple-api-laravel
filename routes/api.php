<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/productos', [ProductosController::class, 'getAllProducts']);
Route::get('/productos/{id}', [ProductosController::class, 'getProduct']);
Route::post('/productos/create', [ProductosController::class, 'create']);
Route::put('/productos/update/{id}', [ProductosController::class, 'update']);
Route::delete('/productos/delete/{id}', [ProductosController::class, 'delete']);