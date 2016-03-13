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
Route::get('/theme', 'Base@theme');
Route::get('/credits', 'Base@credits');

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

//add horse 
Route::get('/add-horse/{type?}', 'Horses@add_horse');
Route::post('/add-horse/{type?}', 'Horses@add_horse_validate');
//horse modal
Route::get('/add-horse-quick', 'Horses@add_horse_quick');
Route::post('/add-horse-quick', 'Horses@add_horse_quick_validate');

//update horse
Route::get('/update-horse/{horse_id}', 'Horses@update_horse');
Route::post('/update-horse/{horse_id}', 'Horses@update_horse_validate');

//person
Route::get('/add-person', 'Person@add_person');
Route::post('/add-person', 'Person@add_person_validate');
//person modal
Route::get('/add-person-quick', 'Person@add_person_quick');
Route::post('/add-person-quick', 'Person@add_person_quick_validate');

//races
Route::get('/add-race/{type?}', 'Races@add_race');
Route::post('/add-race/{type?}', 'Races@add_race_validate');

//race entries
Route::get('/add-race-entrant/{horse_id?}', 'Races@add_race_entrant');
Route::post('/add-race-entrant/{horse_id?}', 'Races@add_race_entrant_validate');

//horse ancestory
Route::get('/add-ancestory/{relationship?}/{horse_id?}', 'Horses_Progeny@add_ancestory');
Route::post('/add-ancestory/{relationship?}/{horse_id?}', 'Horses_Progeny@add_ancestory_validate');

//stall pages
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
