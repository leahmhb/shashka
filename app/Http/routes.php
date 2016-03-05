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

//add person
Route::match(array('GET', 'POST'), '/add-person', 'Person@add_person');

//add horse
Route::get('/add-horse', 'Horses@add_horse');
Route::post('/add-horse', 'Horses@add_horse_validate');

//update horse
Route::get('/update-horse/{horse_id}', 'Horses@update_horse');
Route::post('/update-horse/{horse_id}', 'Horses@update_horse_validate');

//races
Route::get('/add-race', 'Races@add_race');
Route::post('/add-race', 'Races@add_race_validate');

Route::get('/add-race-entrant/{horse_id}', 'Races@add_race_entrant');
Route::post('/add-race-entrant/{horse_id}', 'Races@add_race_entrant_validate');

//foals of horse
Route::get('/add-progeny/{horse_id}', 'Horses_Progeny@add_progeny');
Route::post('/add-progeny/{horse_id}', 'Horses_Progeny@add_progeny_validate');

//parents of horse
Route::get('/add-lineage/{horse_id}', 'Horses_Progeny@add_lineage');
Route::post('/add-lineage/{horse_id}', 'Horses_Progeny@add_lineage_validate');

//other people's horses
Route::get('/add-other-horse', 'Horses_Progeny@add_other_horse');
Route::post('/add-other-horse', 'Horses_Progeny@add_other_horse_validate');

//stall pages
Route::get('/stall/{horse_id}', 'Horses@stall_page');

//theme demo
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
