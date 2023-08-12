<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\PodcastController;
use App\Http\Controllers\API\SetController;
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
Route::apiResource('podcast',PodcastController::class);
Route::apiResource('set',SetController::class);
Route::apiResource('news',NewsController::class);
// Route::apiResource('news/{id}',NewsController::class);