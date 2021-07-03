<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPemasukanController;
use App\Http\Controllers\ApiPengeluaranController;

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

Route::get('/pemasukan', [ApiPemasukanController::class, 'index']);
Route::post('/pemasukan', [ApiPemasukanController::class, 'store']);
Route::put('/pemasukan/{id}', [ApiPemasukanController::class, 'update']);
Route::get('/pemasukan/{id}', [ApiPemasukanController::class, 'show']);
Route::delete('/pemasukan/{id}', [ApiPemasukanController::class, 'destroy']);

Route::get('/pengeluaran', [ApiPengeluaranController::class, 'index']);
Route::post('/pengeluaran', [ApiPengeluaranController::class, 'store']);
Route::put('/pengeluaran/{id}', [ApiPengeluaranController::class, 'update']);
Route::get('/pengeluaran/{id}', [ApiPengeluaranController::class, 'show']);
Route::delete('/pengeluaran/{id}', [ApiPengeluaranController::class, 'destroy']);