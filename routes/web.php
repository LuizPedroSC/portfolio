<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

// user
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::prefix('{user_id}')->group(function () {
        Route::get('/', [UserController::class, 'show'])->name('users.show');
        Route::get('/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/', [UserController::class, 'update'])->name('users.update');
        Route::delete('/destroy', [UserController::class, 'destroy'])->name('users.destroy');
    });
});