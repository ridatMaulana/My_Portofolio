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

Route::auth();

Route::get('/','projectController@home');
Route::get('Project/{id_project}/detail','projectController@detail');
Route::get('Contact/add', 'contactController@create');
Route::post('Contact/add', 'contactController@store');

Route::group(['middleware'=>'auth'], function(){

// Route::get('/','projectController@home');

Route::get('Contact', 'contactController@index');

Route::get('Contact/{id_contact}/edit', 'contactController@edit');
Route::patch('Contact/{id_contact}/edit', 'contactController@update');

Route::delete('Contact/{id_contact}/delete', 'contactController@destroy');

Route::get('Tipe', 'tipeController@index');

Route::get('Tipe/add', 'tipeController@create');
Route::post('Tipe/add', 'tipeController@store');

Route::get('Tipe/{id_tipe}/edit', 'tipeController@edit');
Route::patch('Tipe/{id_tipe}/edit', 'tipeController@update');

Route::delete('Tipe/{id_tipe}/delete', 'tipeController@destroy');

Route::get('Project', 'projectController@index');

Route::get('Project/add', 'projectController@create');
Route::post('Project/add', 'projectController@store');

Route::get('Project/{id_project}/edit', 'projectController@edit');
Route::patch('Project/{id_project}/edit', 'projectController@update');

Route::delete('Project/{id_project}/delete', 'projectController@destroy');
});