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

Route::get('/', function () {return view('welcome');});
Route::get('/update-notes', function () {return view('update-notes');});
Route::get('/roadmap', function () {return view('roadmap');});
Route::get('/developmentTools', function () {return view('developmentTools');});
Route::get('/overview', 'OverviewController@show');
Route::get('/tyres', 'TyresController@show');
Route::get('/vehicles', 'VehiclesController@show');
Route::get('/developmentTools/migrate', 'DevelopmentToolsController@migrate');
Route::get('/developmentTools/seed', 'DevelopmentToolsController@seed');
Route::get('/developmentTools/seedBridgestone', 'DatabaseSeedController@seedBridgestone');

Auth::routes();



