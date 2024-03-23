<?php

use App\Http\Controllers\IngatlanController;
use App\Http\Controllers\IngatlanFutesTipusController;
use App\Http\Controllers\JogosultsagController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});
Route::get('/token', function () {
    return request()->session()->token();
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 

Route::middleware('auth.basic')->group(function () {

    Route::get('/user/{id}', [UserController::class, 'show']);

    Route::apiResource('/api/users', UserController::class);
    Route::post('user', [UserController::class, 'store']);
    Route::delete('user/{user_id}', [UserController::class, 'destroy']);
    Route::put('user/{user_id}', [UserController::class, 'update']);
}); 
Route::get('/ingatlans', [IngatlanController::class, 'index']);
Route::get('/ingatlanFutesTipus', [IngatlanFutesTipusController::class, 'index']);

//lekérdezések:
Route::get('/ingatlanKartyaLista',[IngatlanController::class, 'ingatlanKartya']);
Route::get('/userTablaLista',[UserController::class, 'userTable']);





/* Route::post('user', [UserController::class, 'store']);
Route::delete('user/{user_id}', [UserController::class, 'destroy']);
Route::put('user/{user_id}', [UserController::class, 'update']); */

require __DIR__.'/auth.php';
