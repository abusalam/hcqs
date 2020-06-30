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

// Route::get('/', function () {
//     return view('test');
// });
 //Route::get('/','hydroxychloroquineController@page');
 Route::get('/{code}','hydroxychloroquineController@page');
 Route::post('/submit_yes_no','hydroxychloroquineController@submit_yes_no');



