<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PegawaiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/produk', [ProdukController::class, 'index']);
Route::get('produk/{id}', [ProdukController::class, 'show']);
Route::post('produk', [ProdukController::class, 'store']);
Route::put('produk/{id}', [ProdukController::class, 'update']);
Route::delete('produk/{id}', [ProdukController::class, 'destroy']);

Route::get('/poli', [PoliController::class, 'index']);
Route::get('poli/{id}', [PoliController::class, 'show']);
Route::post('poli', [PoliController::class, 'store']);
Route::put('poli/{id}', [PoliController::class, 'update']);
Route::delete('poli/{id}', [PoliController::class, 'destroy']);
// Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('pegawai/{id}', [PegawaiController::class, 'show']);
Route::post('pegawai', [PegawaiController::class, 'store']);
Route::put('pegawai/{id}', [PegawaiController::class, 'update']);
Route::delete('pegawai/{id}', [PegawaiController::class, 'destroy']);
