<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers;
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

//Route::post('/register',[UserController::class,'register']);
Route::post('/register','App\Http\Controllers\UserController@register');
Route::post('/login','App\Http\Controllers\UserController@login');
Route::post('/addproduct','App\Http\Controllers\productController@addProducts');
