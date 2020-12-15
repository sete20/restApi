<?php

use App\Http\Controllers\lessonController;
use App\Http\Controllers\api\registerController;
use App\Http\Controllers\api\loginController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('test', [lessonController::class, 'index']);
Route::post('register', [registerController::class, 'register']);
Route::post('login', [loginController::class, 'login']);
Route::post('logout', [loginController::class, 'logout']);
