<?php

use App\Http\Controllers\IngatlanFutesTipusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//ingatlan_futes_tipus tábla alap-routok:

Route::get('ingatlan_futes_tipuses', [IngatlanFutesTipusController::class, 'index']);
Route::get('ingatlan_futes_tipuses/{id}', [IngatlanFutesTipusController::class, 'show']);
Route::post('ingatlan_futes_tipuses', [IngatlanFutesTipusController::class, 'store']);
Route::put('ingatlan_futes_tipuses/{id}', [IngatlanFutesTipusController::class, 'update']);
Route::delete('ingatlan_futes_tipuses/{id}', [IngatlanFutesTipusController::class, 'destroy']);