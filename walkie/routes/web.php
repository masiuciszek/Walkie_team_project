<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/dog-create', function () 
{

    // return \App\Breed::all();

    $breeds = \App\Breed::pluck('name', 'id');
    
    return view('/create_dog/create_dog', compact(['breeds']));
});
// Route::get('/{path?}', function () {
//     return view('welcome');
// });
