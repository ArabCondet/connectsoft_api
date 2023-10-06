<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
Route::prefix('/buku')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('/update',[BukuController::class,'update']);
    Route::delete('/destroy',[BukuController::class,'destroy']);
});

Route::prefix('/Anggota')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('/update',[BukuController::class,'update']);
    Route::delete('/destroy',[BukuController::class,'destroy']);
});

Route::prefix('/petugas')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('/update',[BukuController::class,'update']);
    Route::delete('/destroy',[BukuController::class,'destroy']);
});

Route::prefix('/peminjaman')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('/update',[BukuController::class,'update']);
    Route::delete('/destroy',[BukuController::class,'destroy']);
});

Route::prefix('/pengembalian')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('/update',[BukuController::class,'update']);
    Route::delete('/destroy',[BukuController::class,'destroy']);
});

Route::prefix('/rak')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::post('/create',[BukuController::class,'create']);
    Route::put('/update',[BukuController::class,'update']);
    Route::delete('/destroy',[BukuController::class,'destroy']);
});

