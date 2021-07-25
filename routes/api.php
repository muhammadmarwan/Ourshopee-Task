<?php

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

//api for store products
Route::post('/storeProduct', [App\Http\Controllers\CartController::class, 'storeProduct']);

//api for list all products
Route::get('/listProducts', [App\Http\Controllers\CartController::class, 'listProducts']);

//api for add and update cart using product id
Route::post('/addToCart/{id}', [App\Http\Controllers\CartController::class, 'addToCart']);

//api for list product cart
Route::get('/listCartProducts', [App\Http\Controllers\CartController::class, 'listCartProducts']);
