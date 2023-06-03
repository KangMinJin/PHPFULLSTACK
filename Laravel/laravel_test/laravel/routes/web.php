<?php

use App\Http\Controllers\BoardController;
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
    return view('welcome');
});
                            // ? [튜플방식]
Route::get('/users/login', [UserController::class, 'login'])->name('user.login');
Route::post('/users/loginpost', [UserController::class, 'loginpost'])->name('user.loginpost');

Route::get('/boards/list', [BoardController::class, 'list'])->name('board.list');
Route::get('/boards/write', [BoardController::class, 'write'])->name('board.write');
Route::post('/boards/write', [BoardController::class, 'store'])->name('board.store');
// Route::resource('/boards', BoardController::class);