<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;
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

Route::get('/ac',[UserController::class,'access']); //T
Route::apiResource('users', UserController::class);
Route::put('/user/password',[UserController::class, 'passwordUpdate']); // U

Route::apiResource('skills', SkillController::class);

Route::apiResource('recruits', RecruitController::class);
Route::get('recruits/other/{id}', [RecruitController::class,'otherShow']);

Route::apiResource('teachers', TeacherController::class);


Route::post('/auth', [AuthController::class, 'test']);