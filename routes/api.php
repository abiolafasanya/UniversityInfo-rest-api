<?php

use App\Http\Controllers\UniController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
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

//public course route
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::get('/courses/search/{name}', [CourseController::class, 'search']);



// Protected Route
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/universities', [UniController::class, 'store']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::put('/universities/{id}', [UniController::class, 'update']);
    Route::delete('/universities/{id}', [UniController::class, 'destroy']);

    //protected courses route
    Route::post('/courses', [CourseController::class, 'store']);
    Route::put('/courses/{id}', [CourseController::class, 'update']);
    Route::delete('/courses/{id}', [CourseController::class, 'destroy']);
    
});


 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
