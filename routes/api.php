<?php

use App\Http\Controllers\API\ApiRegisController;
use App\Http\Controllers\API\ApiRegisTugasController;
use App\Http\Controllers\AuthController;
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
//api regis belajar
Route::post('/register', [ApiRegisController::class, 'register']);
//api regis tugas mobile
Route::post('/registermobile', [ApiRegisTugasController::class, 'register']);

Route::get('/user', function (Request $request) {
    return $request->user();
    })->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);




