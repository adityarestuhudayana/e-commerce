<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('/products', ProductController::class)->middleware('auth');

Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', [LoginController::class, 'auth']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::prefix('register')->group(function () {
    Route::get('/', [LoginController::class, 'register']);
    Route::post('/store', [LoginController::class, 'store']);
});
