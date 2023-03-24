<?php

use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\SkillController;
use App\Models\Skill;
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

//about
Route::get('edit_about',[AboutController::class,'edit_about']);
Route::post('update_about/{id}',[AboutController::class,'update_about']);
//service
Route::get('get_all_service',[ServiceController::class,'get_all_service']);
Route::post('create_service',[ServiceController::class,'create_service']);
Route::post('update_service/{id}',[ServiceController::class,'update_service']);
Route::get('delete_service/{id}',[ServiceController::class,'delete_service']);

//skill
Route::get('get_all_skill',[SkillController::class,'get_all_skill']);
Route::post('create_skill',[SkillController::class,'create_skill']);
Route::post('update_skill/{id}',[SkillController::class,'update_skill']);
Route::get('delete_skill/{id}',[SkillController::class,'delete_skill']);

//education
Route::get('get_all_education',[EducationController::class,'get_all_education']);
Route::post('create_education',[EducationController::class,'create_education']);
Route::post('update_education/{id}',[EducationController::class,'update_education']);
Route::get('delete_education/{id}',[EducationController::class,'delete_education']);







