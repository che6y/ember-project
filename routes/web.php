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

Route::get('/edit-about','SkillController@index');

Route::get('/works','WorkController@index');
Route::get('/works/create','WorkController@create');
Route::post('/works','WorkController@store');
Route::get('/works/{$work}','WorkController@show');

Route::get('/edit-contact','ContactController@index');

Auth::routes();

Route::get('/adminka', 'HomeController@index')->name('home');
