<?php
use App\Work;
use App\Skill;

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
    $skills = App\Skill::all();
    $works = App\Work::all();
    return view('vue', compact('skills', 'works'));
});

Route::get('/edit-about',['uses' => 'SkillController@index', 'as' => 'edit-about']);

Route::get('/works',['uses' => 'WorkController@index', 'as' => 'works']);
Route::get('/works/create',['uses' => 'WorkController@create', 'as' => 'create-work']);
Route::post('/works','WorkController@store');
Route::get('/works/edit/{id}',['uses' => 'WorkController@edit', 'as' => 'work']);
Route::put('/update-work/{id}','WorkController@update');
Route::delete('/delete-work/{id}','WorkController@destroy');

Route::get('/edit-contact',['uses' => 'ContactController@edit', 'as' => 'edit-contact']);
Route::put('/update-contact',['uses' => 'ContactController@update', 'as' => 'contact-update']);

Auth::routes();

Route::get('/adminka', 'HomeController@index')->name('home');
