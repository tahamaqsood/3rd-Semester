<?php

use Illuminate\Support\Facades\Route;

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
// Routing path for default Welcome page in laravel framework
Route::get('/', function () {
    return view('welcome');
});

//Routing path for Index
Route::get('Index','HomeController@Index');

//Routing path for About
Route::get('About','HomeController@About');

//Routing path for Contact
Route::get('Contact','HomeController@Contact');

//Routing path for ShowName function (Parametarized function)
Route::get('ShowName/{name}','HomeController@ShowName');

//Routing path for GetID function (Parametarized function)
Route::get('GetID/{id}','HomeController@GetID');



