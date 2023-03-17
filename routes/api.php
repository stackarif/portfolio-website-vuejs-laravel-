<?php

use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\AuthController;
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

// Route::controller(AuthController::class)->group(function(){
//     Route::post('login', 'login');
//     Route::post('register', 'register');

// });

Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);

Route::get('edit_about',[AboutController::class,'edit_about']);
Route::post('update_about/{id}',[AboutController::class,'update_about']);