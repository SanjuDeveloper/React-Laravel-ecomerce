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
Route::get('/getproduct','App\Http\Controllers\productController@getProduct');
Route::delete('/deleteproduct/{id}','App\Http\Controllers\productController@deleteProduct');
Route::get('/singleproduct/{id}','App\Http\Controllers\productController@getsignleproduct');
Route::post('/updateProduct/{id}','App\Http\Controllers\productController@updateProduct');
Route::get('/searchproduct/{id}','App\Http\Controllers\productController@searchProduct');