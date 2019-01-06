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
//     return view('welcome');
// });

// Route::get('/inbox', function () {
//     return '<h1>inbox</h1>';
// });

// Route::get('/inbox/{id}', function ($id) {
//     return 'This is inbox '.$id;
// });

Route::get('/', 'inboxController@index');
Route::get('/index', 'inboxController@index');
Route::get('/services', 'inboxController@services');
