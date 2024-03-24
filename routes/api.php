<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\IngatlanController;
use App\Http\Controllers\IngatlanFutesTipusController;

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

Route::middleware(['auth:sanctum'])->get('user', function (Request $request) {
    return $request->user();
});

Route::get('/token', function () {
    return request()->session()->token();
});

Route::get('/dashboard', function () {
    return '{}'; //view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//user

//ingatlans

// ingatlan lekérdezések
Route::get('ingatlanKartyaLista', [IngatlanController::class, 'ingatlanKartya']);

//telepules
Route::get('telepules', [TelepulesController::class, 'index']);

//ingatlan_futes_tipus
Route::get('ingfutestipus', [IngatlanFutesTipusController::class, 'index']);

//ingatlan_futes_tipus lekérdezések
Route::get('ingatlanFutesTipus', [IngatlanFutesTipusController::class, 'index']);

//preferencia
Route::get('preferencias', [IngatlanController::class, 'index']);
Route::get('preferencias/{partner}/{tipus_id}/{telepules_id}', [IngatlanController::class, 'show']);
Route::post('ingatlans', [IngatlanController::class, 'store']);
Route::delete('ingatlans/{ing_id}', [IngatlanController::class, 'destroy']);
Route::put('ingatlans/{ing_id}', [IngatlanController::class, 'update']);

//hiredetes
Route::get('hirdetes', [IngatlanController::class, 'index']);
Route::get('hirdetes/{hirdetes_id}', [IngatlanController::class, 'show']);
Route::post('hirdetes', [IngatlanController::class, 'store']);
Route::delete('hirdetes/{hirdetes_id}', [IngatlanController::class, 'destroy']);
Route::put('hirdetes/{hirdetes_id}', [IngatlanController::class, 'update']);

//arvaltozas
Route::get('arvaltozas', [IngatlanController::class, 'index']);
Route::get('arvaltozas/{hirdetes_id}/{meddig}', [IngatlanController::class, 'show']);
Route::post('arvaltozas', [IngatlanController::class, 'store']);
Route::delete('arvaltozas/{hirdetes_id}/{meddig}', [IngatlanController::class, 'destroy']);
Route::put('arvaltozas/{hirdetes_id}/{meddig}', [IngatlanController::class, 'update']);

//fotos
Route::get('fotos', [IngatlanController::class, 'index']);
Route::get('fotos/{foto_id}', [IngatlanController::class, 'show']);
Route::post('fotos', [IngatlanController::class, 'store']);
Route::delete('fotos/{foto_id}', [IngatlanController::class, 'destroy']);
Route::put('fotos/{foto_id}', [IngatlanController::class, 'update']);

//bemutatas
Route::get('bemutatas', [IngatlanController::class, 'index']);
Route::get('bemutatas/{ing_id}/{bemutatas_datuma}', [IngatlanController::class, 'show']);
Route::post('bemutatas', [IngatlanController::class, 'store']);
Route::delete('bemutatas/{ing_id}/{bemutatas_datuma}', [IngatlanController::class, 'destroy']);
Route::put('bemutatas/{ing_id}/{bemutatas_datuma}', [IngatlanController::class, 'update']);



Route::middleware('auth')->group(function () {


    Route::get('me', [UserController::class, 'me']);
    Route::middleware(['admin'])->group(function () {
       
        Route::get('user', [UserController::class, 'index']);
        Route::get('user/{id}', [UserController::class, 'show']);
        Route::post('user', [UserController::class, 'store']);
        Route::put('user/{user_id}', [UserController::class, 'update']);
        Route::delete('user/{user_id}', [UserController::class, 'destroy']);
        //lekérdezések:
        Route::get('userTablaLista', [UserController::class, 'userTable']);
    });

    // ingatlanok
    Route::get('ingatlans', [IngatlanController::class, 'index']);
    Route::get('ingatlans/{id}', [IngatlanController::class, 'show']);
    Route::post('ingatlans', [IngatlanController::class, 'store']);
    Route::delete('ingatlans/{ing_id}', [IngatlanController::class, 'destroy']);
    Route::put('ingatlans/{ing_id}', [IngatlanController::class, 'update']);
});

require __DIR__ . '/auth.php';
