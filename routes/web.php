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

/*Route::get('/', function () {

    return view('index');*/

Route::get('/','Controller@index');
Route::get('/animals/{id}','AnimalController@show');

Route::get('/gossos','AnimalController@gossos');
Route::get('/gats','AnimalController@gats');

Route::get('/misio/','infoController@misio');
Route::get('/recursos/','infoController@recursos');
Route::get('/equip/','infoController@equip');
Route::get('/instalacions/','infoController@instalacions');

Route::get('/condicions/','infoController@con');
Route::get('/consells','infoController@adv');
Route::get('/noticies/','newsController@con');


Auth::routes();





Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/animals', 'AnimalController@index');
    Route::get('/animals/create', 'AnimalController@create');
    Route::post('/animals', 'AnimalController@store');
    Route::get('/animals/{id}/edit', 'AnimalController@edit');
    Route::post('/animals/{id}/edit', 'AnimalController@update');
    Route::post('/animals/{id}/delete', 'AnimalController@destroy');
});

