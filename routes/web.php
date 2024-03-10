<?php

use App\Http\Controllers\IngatlanController;
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
    Route::get('/jogosultsags', [JogosultsagController::class, 'index']);
    Route::apiResource('/api/users', UserController::class);


}); 
Route::get('/ingatlans', [IngatlanController::class, 'index']);
//lekérdezések:
Route::get('/ingatlanKartyaLista',[IngatlanController::class, 'ingatlanKartya']);


require __DIR__.'/auth.php';
