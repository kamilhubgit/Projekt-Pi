<?php

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
Route::get('/krupa/302134/people',[\App\Http\Controllers\Api\PeopleController::class,'index']);
Route::get('/krupa/302134/people/{id}',[\App\Http\Controllers\Api\PeopleController::class,'show']);
Route::post('/krupa/302134/people',[\App\Http\Controllers\Api\PeopleController::class,'store']);
Route::put('/krupa/302134/people/{id}/{nazwisko}',[\App\Http\Controllers\Api\PeopleController::class,'update']);
Route::delete('/krupa/302134/people/{id}',[\App\Http\Controllers\Api\PeopleController::class,'destroy']);