<?php

use App\Http\Controllers\CartApiControllers;
use App\Http\Controllers\CategoryApiControllers;
use App\Http\Controllers\FoodApiController;
use App\Http\Controllers\OrderApiControllers;
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

Route::resource('/food', FoodApiController::class);
Route::get('/category', [CategoryApiControllers::class, 'index'])->name('category');
Route::get('/cart', [CartApiControllers::class, 'index'])->name('cart');
Route::get('/order', [OrderApiControllers::class, 'index'])->name('order');