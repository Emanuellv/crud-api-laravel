<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//route::apiResource('films', \App\Http\Controllers\Api\FilmController::class);

// List filmes
Route::get('filmes', [FilmController::class,'index']);

// List single filme
Route::get('filme/{id}', [FilmController::class,'show']);

// Create new filme
Route::post('filme', [FilmController::class,'store']);

// Update filme
Route::put('filme/{id}', [FilmController::class,'update']);

// Delete filme
Route::delete('filme/{id}', [FilmController::class,'destroy']);
