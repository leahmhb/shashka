<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

//basics
Route::get('/', 'Base@index');
Route::get('/theme', 'Base@theme');
Route::get('/credits', 'Base@credits');
Route::get('/contact', 'Base@contact');

//lists
Route::get('/horse-list', 'Horses@horse_list');
Route::get('/person-list', 'Person@person_list');
Route::get('/race-list', 'Races@race_list');
Route::get('/entry-list', 'Races@entry_list');

//quick forms
Route::get('/quick-horse',  ['middleware' => 'auth','Horses@quick_horse']);
Route::get('/quick-person',  ['middleware' => 'auth','Person@quick_person']);
Route::get('/quick-race',  ['middleware' => 'auth','Races@quick_race']);

Route::post('/quick-horse', ['middleware' => 'auth', 'uses' => 'Horses@quick_horse_validate']);
Route::post('/quick-person', ['middleware' => 'auth', 'uses' => 'Person@quick_person_validate']);
Route::post('/quick-race', ['middleware' => 'auth', 'uses' => 'Races@quick_race_validate']);

//horse 
Route::get('/horse/{horse_id?}', ['middleware' => 'auth', 'uses' => 'Horses@horse']);
Route::post('/horse/{horse_id?}', ['middleware' => 'auth', 'uses' => 'Horses@horse_validate']);

//person
Route::get('/person/{person_id?}', ['middleware' => 'auth', 'uses' => 'Person@person']);
Route::post('/person/{person_id?}', ['middleware' => 'auth', 'uses' => 'Person@person_validate']);

//race
Route::get('/race/{race_id?}', ['middleware' => 'auth', 'uses' => 'Races@race']);
Route::post('/race/{race_id?}', ['middleware' => 'auth', 'uses' => 'Races@race_validate']);

//race entry
Route::get('/race-entry/{horse_id?}/{entry_id?}', ['middleware' => 'auth', 'uses' => 'Races@race_entry']);
Route::post('/race-entry/{horse_id?}/{entry_id?}', ['middleware' => 'auth', 'uses' => 'Races@race_entry_validate']);

//race and entry
Route::get('/race-and-entry', ['middleware' => 'auth', 'uses' => 'Races@race_and_entry']);
Route::post('/race-and-entry', ['middleware' => 'auth', 'uses' => 'Races@race_and_entry_validate']);

//ancestory
Route::get('/ancestory/{relationship?}/{horse_id?}', ['middleware' => 'auth', 'uses' => 'Horses_Progeny@ancestory']);
Route::post('/ancestory/{relationship?}/{horse_id?}', ['middleware' => 'auth', 'uses' => 'Horses_Progeny@ancestory_validate']);

//stall
Route::get('/stall/{horse_id}', 'Horses@stall_page');

//delete
Route::get('/remove-entry/{entry_id}', ['middleware' => 'auth', 'uses' => 'Races@remove_entry']);
Route::get('/remove-race/{race_id}', ['middleware' => 'auth', 'uses' => 'Races@remove_race']);
Route::get('/remove-horse/{horse_id}', ['middleware' => 'auth', 'uses' => 'Horses@remove_horse']);
Route::get('/remove-person/{person_id}', ['middleware' => 'auth', 'uses' => 'Person@remove_person']);

Route::get('/remove-ancestory/{horse_id}', ['middleware' => 'auth', 'uses' => 'Horse_Progeny@remove_ancestory']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
  ]);
