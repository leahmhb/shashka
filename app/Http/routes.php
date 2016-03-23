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
Route::get('/quick-horse', 'Horses@quick_horse');
Route::get('/quick-person', 'Person@quick_person');
Route::get('/quick-race', 'Races@quick_race');

Route::post('/quick-horse', 'Horses@horse_validate');
Route::post('/quick-person', 'Person@quick_person_validate');
Route::post('/quick-race', 'Races@race_validate');

//horse 
Route::get('/horse/{horse_id?}', 'Horses@horse');
Route::post('/horse/{horse_id?}', 'Horses@horse_validate');

//person
Route::get('/person/{person_id?}', 'Person@person');
Route::post('/person/{person_id?}', 'Person@person_validate');

//race
Route::get('/race/{race_id?}', 'Races@race');
Route::post('/race/{race_id?}', 'Races@race_validate');

//race entrant
Route::get('/race-entrant/{horse_id?}/{entry_id?}', 'Races@race_entrant');
Route::post('/race-entrant/{horse_id?}/{entry_id?}', 'Races@race_entrant_validate');

//race and entry
Route::get('/race-and-entry', 'Races@race_and_entry');
Route::post('/race-and-entry', 'Races@race_and_entry_validate');

//ancestory
Route::get('/ancestory/{relationship?}/{horse_id?}', 'Horses_Progeny@ancestory');
Route::post('/ancestory/{relationship?}/{horse_id?}', 'Horses_Progeny@ancestory_validate');

//stall
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
