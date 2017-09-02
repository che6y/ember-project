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
// Route::get('/skills', function () {
//     return App\Skill::all();
// });
// Route::get('/works', function () {
//     return App\Work::all();
// });

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
