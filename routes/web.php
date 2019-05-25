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
Route::get('/skills',['uses' => 'SkillController@index', 'as' => 'skills']);
Route::get('/skills/create',['uses' => 'SkillController@create', 'as' => 'create-skill']);
Route::post('/skills','SkillController@store');
Route::get('/skills/edit/{id}',['uses' => 'SkillController@edit', 'as' => 'skill']);
Route::put('/update-skill/{id}','SkillController@update');
Route::delete('/delete-skill/{id}','SkillController@destroy');

Route::get('/works',['uses' => 'WorkController@index', 'as' => 'works']);
Route::get('/works/create',['uses' => 'WorkController@create', 'as' => 'create-work']);
Route::post('/works','WorkController@store');
Route::get('/works/edit/{id}',['uses' => 'WorkController@edit', 'as' => 'work']);
Route::put('/update-work/{id}','WorkController@update');
Route::delete('/delete-work/{id}','WorkController@destroy');

Route::get('/edit-contact',['uses' => 'TermController@edit', 'as' => 'edit-contact']);
Route::put('/update-contact',['uses' => 'TermController@update', 'as' => 'contact-update']);
Route::get('/adminka', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/{any}', 'SpaController@index')->where('any', '.*');

