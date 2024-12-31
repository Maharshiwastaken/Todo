<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\TodoController::class, 'index']);
Route::get('/create', [\App\Http\Controllers\TodoController::class, 'create']);
Route::get('/details/{todo}', [\App\Http\Controllers\TodoController::class, 'details']);
Route::get('/edit/{todo}', [\App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/update/{todo}', [\App\Http\Controllers\TodoController::class, 'update']);
Route::get('/delete/{todo}', [\App\Http\Controllers\TodoController::class, 'delete']);
Route::post('/create', [\App\Http\Controllers\TodoController::class, 'store']);
