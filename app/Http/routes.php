<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Base@index');

Route::get('/add-horse', 'Horses@add_horse');
Route::post('/add-horse', 'Horses@add_horse_validate');

Route::get('/update-horse', 'Horses@update_horse');
Route::post('/update-horse', 'Horses@update_horse_validate');

Route::get('/add-race', 'Races@add_race');
Route::post('/add-race', 'Races@add_race_validate');

Route::get('/add-lineage', 'Horses_Progeny@add_lineage');
Route::post('/add-lineage', 'Horses_Progeny@add_lineage_validate');

Route::get('/stall/{horse_id}', 'Horses@stall_page');

Route::get('/theme', function () {
  View::composers(['App\Composers\HomeComposer'  => ['theme']]);
  return view('theme');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
