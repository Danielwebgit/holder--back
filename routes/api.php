<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Client\ClientController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Transation\TransationsController;
use App\Http\Controllers\Api\Product\ProductsController;
use App\Http\Controllers\Api\Sale\SalesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
|
*/

Route::prefix('auth')->group(function (){
    Route::post('/login', [AuthController::class,'login']);
});

/** v1 */
Route::prefix('v1')->group(function (){

    /** Rota do grupo de cliente */
    Route::prefix('clients')->group(function (){
        Route::get('/', [ClientController::class, 'index']);
    });

    /** Rota do grupo de transação */
    Route::prefix('transations')->group(function (){
        Route::get('/', [TransationsController::class, 'index']);
    });
    
    /** Rota do grupo de produtos */
    Route::prefix('products')->group(function (){
        Route::get('/', [ProductsController::class, 'index']);
    });

    Route::prefix('sale')->group(function (){
        Route::post('/store', [SalesController::class, 'store']);
    });

});