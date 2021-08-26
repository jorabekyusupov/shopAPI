<?php

use App\Http\Controllers\Api\PassportController;
use App\Http\Controllers\Api\ProductController;
use Facade\FlareClient\Api;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('categories', ProductController::class);
});
Route::POST('register', [PassportController::class, 'register'])->name('api.register');
Route::POST('login', [PassportController::class, 'login'])->name('api.login');
