<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\IngatlanController;
use App\Http\Controllers\IngatlanFutesTipusController;
use App\Http\Controllers\JogosultsagController;
use App\Http\Controllers\TelepulesController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user', [UserController::class, 'store']);
Route::delete('user/{user_id}', [UserController::class, 'destroy']);
Route::put('user/{user_id}', [UserController::class, 'update']);

Route::get('/ingatlans', [IngatlanController::class, 'index']);
Route::post('ingatlans', [IngatlanController::class, 'store']);
Route::delete('ingatlans/{ing_id}', [IngatlanController::class, 'destroy']);
Route::put('ingatlans/{ing_id}', [IngatlanController::class, 'update']);

Route::get('/telepules', [TelepulesController::class, 'index']);

Route::get('/jogosultsags',[JogosultsagController::class, 'index']);

Route::get('/ingfutestipus',[IngatlanFutesTipusController::class, 'index']);

//lekérdezések:
Route::get('/ingatlanKartyaLista',[IngatlanController::class, 'ingatlanKartya']);
Route::get('/userTablaLista',[UserController::class, 'userTable']);