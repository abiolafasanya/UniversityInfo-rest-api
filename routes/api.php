<?php

use App\Http\Controllers\UniController;
use App\Http\Controllers\UserController;
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

// Public Route
// Route::resource('universities', UniController::class);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/universities', [UniController::class, 'index']);
Route::get('/universities/{id}', [UniController::class, 'show']);
Route::get('/universities/search/{name}', [UniController::class, 'search']);


// Protected Route
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/universities', [UniController::class, 'store']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::put('/universities/{id}', [UniController::class, 'update']);
    Route::delete('/universities/{id}', [UniController::class, 'destroy']);
    
});


 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
