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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/update-notes', function () {
    return view('update-notes');
});
Route::get('/roadmap', function () {
    return view('roadmap');
});
Route::get('app', 'ApplicationController@show');
#Route::get('roadmap', 'RoadmapController@show');

Auth::routes();



