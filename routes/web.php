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

Route::get('/firstchart', function () {
    return view('chart');
});

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});

Route::get('charts', 'ChartController@index')->name('chart.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
