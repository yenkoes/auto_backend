<?php

use App\Http\Controllers\autoController;
use App\Http\Controllers\degvielaController;
use App\Http\Controllers\ielaController;
use App\Http\Controllers\krasaController;
use App\Http\Controllers\markaController;
use App\Http\Controllers\modelController;
use App\Http\Controllers\motorController;
use App\Http\Controllers\typeController;
use App\Http\Controllers\pilsetaController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/Auto', [autoController::class, 'index']);
Route::post('/Auto', [autoController::class, 'store']);

Route::get('/degviela', [degvielaController::class, 'index']);
Route::post('/degviela', [degvielaController::class, 'store']);

Route::get('/iela', [ielaController::class, 'index']);
Route::post('/iela', [ielaController::class, 'store']);

Route::get('/krasa', [krasaController::class, 'index']);
Route::post('/krasa', [krasaController::class, 'store']);

Route::get('/marka', [markaController::class, 'index']);
Route::post('/marka', [markaController::class, 'store']);

Route::get('/model', [modelController::class, 'index']);
Route::post('/model', [modelController::class, 'store']);

Route::get('/motor', [motorController::class, 'index']);
Route::post('/motor', [motorController::class, 'store']);

Route::get('/type', [typeController::class, 'index']);
Route::post('/type', [typeController::class, 'store']);

Route::get('/pilseta', [pilsetaController::class, 'index']);
Route::post('/pilseta', [pilsetaController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
