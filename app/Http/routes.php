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

//basics
Route::get('/', 'Base@index');
Route::get('/theme', 'Base@theme');
Route::get('/credits', 'Base@credits');

//lists
Route::get('/horse-list', 'Horses@horse_list');
Route::get('/person-list', 'Person@person_list');
Route::get('/race-list', 'Races@race_list');
Route::get('/entry-list', 'Races@entry_list');

//quick forms
Route::get('/quick-add-horse', 'Horses@quick_add_horse');
Route::post('/quick-add-horse', 'Horses@add_horse_validate');
Route::get('/quick-add-person', 'Person@quick_add_person');
Route::post('/quick-add-person', 'Person@add_person_validate');
Route::get('/quick-add-race', 'Races@quick_add_race');
Route::post('/quick-add-race', 'Races@add_race_validate');

//contact form mess
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

//add horse 
Route::get('/add-horse', 'Horses@add_horse');
Route::post('/add-horse', 'Horses@add_horse_validate');

//update horse
Route::get('/update-horse/{horse_id}', 'Horses@update_horse');
Route::post('/update-horse/{horse_id}', 'Horses@update_horse_validate');

//person
Route::get('/add-person', 'Person@add_person');
Route::post('/add-person', 'Person@add_person_validate');

//update person
Route::get('/update-person/{person_id}', 'Person@update_person');
Route::post('/update-person/{person_id}', 'Person@update_person_validate');

//races
Route::get('/add-race', 'Races@add_race');
Route::post('/add-race', 'Races@add_race_validate');

//update race
Route::get('/update-race/{race_id}', 'Races@update_race');
Route::post('/update-race/{race_id}', 'Races@update_race_validate');

//race entries
Route::get('/add-race-entrant/{horse_id?}', 'Races@add_race_entrant');
Route::post('/add-race-entrant/{horse_id?}', 'Races@add_race_entrant_validate');

//update race entries
Route::get('/update-race-entrant/{entry_id}', 'Races@update_race_entrant');
Route::post('/update-race-entrant/{entry_id}', 'Races@update_race_entrant_validate');

//add race and entry
Route::get('/add-race-and-entry', 'Races@add_race_and_entry');
Route::post('/add-race-and-entry', 'Races@add_race_and_entry_validate');

//horse ancestory
Route::get('/add-ancestory/{relationship?}/{horse_id?}', 'Horses_Progeny@add_ancestory');
Route::post('/add-ancestory/{relationship?}/{horse_id?}', 'Horses_Progeny@add_ancestory_validate');

//stall page
Route::get('/stall/{horse_id}', 'Horses@stall_page');


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
