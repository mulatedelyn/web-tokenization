<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EnrollmentController;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\EnrollmentPostController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [EnrollmentController::class, 'login']);
Route::post('register', [EnrollmentController::class, 'register']);
Route::post('reset-password', [EnrollmentController::class, 'resetPassword']);

Route::get('get-all-posts',[ EnrollmentPostController::class,'getAllPosts']);
Route::get('get-post',[ EnrollmentPostController::class,'getPost']);
Route::get('search-post',[ EnrollmentPostController::class,'searchPost']);