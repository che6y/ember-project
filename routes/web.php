<?php
use App\Work;
use App\Skill;
use App\Contact;

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
    $skills = Skill::orderBy('position')->get();
    $works = Work::all();
    $contact = Contact::first();
    return view('vue', compact('skills', 'works','contact'));
});

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
Route::get('/works/upload-img/{id}',['uses' => 'WorkController@uploadImage', 'as' => 'upload-img']);
Route::post('/save-img/{id}',['uses' => 'WorkController@saveImage', 'as' => 'save-img']);

Route::get('/edit-contact',['uses' => 'ContactController@edit', 'as' => 'edit-contact']);
Route::put('/update-contact',['uses' => 'ContactController@update', 'as' => 'contact-update']);

Auth::routes();

Route::get('/adminka', 'HomeController@index')->name('home');
