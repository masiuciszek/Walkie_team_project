<?php

use Illuminate\Http\Request;

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


// Route::post('/dog/{id}/vote', 'Api\DogController@vote');
// Route::post('/dog/{id}/walk', 'Api\DogController@bookTime');
Route::get('/dog', 'Api\DogController@index');
Route::post('/dog', 'Api\DogController@index');

// Route::post('api/walk/{id}/time', 'Api\DogController@bookTime');
// Route::resource('/dog', 'Api\DogController');

// Route::get('/api/boboba', 'Api\DogController@dogProfile')