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
    return '{}';
    // return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
