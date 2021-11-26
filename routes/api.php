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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('users')->group(function () {
    Route::get('', 'UserApiController@listUsers');
    Route::post('', 'UserApiController@createUser');
    Route::put('/{id}', 'UserApiController@updateUser');
    Route::delete('/{id}', 'UserApiController@deleteUser');
});
Route::prefix('books')->group(function () {
    Route::get('', 'BookApiController@listBooks');
    Route::post('', 'BookApiController@createBook');
    Route::put('/{id}', 'BookApiController@updateBook');
    Route::delete('/{id}', 'BookApiController@deleteBook');
});
Route::prefix('authors')->group(function () {
    Route::get('', 'AuthorApiController@listBooks');
    Route::post('', 'AuthorApiController@createBook');
    Route::put('/{id}', 'AuthorApiController@updateBook');
    Route::delete('/{id}', 'AuthorApiController@deleteBook');
});
