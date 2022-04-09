<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CustomersController;
use App\Models\Customer;
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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::get('/customers/search/{name}', [CustomersController::class, 'search']);

Route::middleware('auth:sanctum')->group(function () {

    // Route::resource('customers', CustomersController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
    Route::resource('customers', CustomersController::class)->except(['search']);
    Route::post('/logout', [AuthController::class, 'logout']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
