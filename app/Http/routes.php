<?php

/*
|--------------------------------------------------------------------------
| Basic Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [
  'as' => 'index', 
  'uses' => 'Base@index']);

Route::get('/credits', [
  'as' => 'credits', 
  'uses' => 'Base@credits']);

Route::get('/contact', [
  'as' => 'contact', 
  'uses' => 'Base@contact']);

Route::get('/people-tables', [
  'as' => 'people_tables',
  'uses' => 'Base@people_tables']);

/*
|--------------------------------------------------------------------------
| Guide Routes
|--------------------------------------------------------------------------
*/

Route::get('/guide_getting_started', [
  'as' => 'guide_getting_started', 
  'uses' => 'Base@guide_getting_started']);

Route::get('/guide_breeding', [
  'as' => 'guide_breeding', 
  'uses' => 'Base@guide_breeding']);

Route::get('/guide_colors', [
  'as' => 'guide_colors', 
  'uses' => 'Base@guide_colors']);

Route::get('/guide_stats', [
  'as' => 'guide_stats', 
  'uses' => 'Base@guide_stats']);

Route::get('/guide_abilities', [
  'as' => 'guide_abilities', 
  'uses' => 'Base@guide_abilities']);

Route::get('/guide_form', [
  'as' => 'guide_form', 
  'uses' => 'Base@guide_form']);

Route::post('/guide_form', [
  'as' => 'guide_form_result', 
  'uses' => 'Base@guide_form_result']);

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Person Routes
|--------------------------------------------------------------------------
*/

/*------------------------------------------------------------------------
| User Person Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'user'], function () {
  Route::get('/person/{person_id?}', [
    'as' => 'person',  
    'uses' => 'Person@person']);
});
/*------------------------------------------------------------------------
| Owner Horse Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'owner'], function () {
  Route::post('/person/{person_id?}', [
    'as' => 'person_validate',  
    'uses' => 'Person@person_validate']);
});
/*------------------------------------------------------------------------
| Admin Person Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'admin'], function () {
  Route::get('/remove-person/{person_id}', [
    'as' => 'remove_person',  
    'uses' => 'Person@remove_person']);

  Route::post('/remove-person/{person_id}', [
    'as' => 'remove_person',  
    'uses' => 'Person@remove_person']);
});
/*
|--------------------------------------------------------------------------
| Horse Routes
|--------------------------------------------------------------------------
*/
/*------------------------------------------------------------------------
| Guest Horse Routes
--------------------------------------------------------------------------*/
Route::get('/horse-table/{owner?}/{breeding_status?}/{sex?}/{grade?}', [
  'as' => 'horse_table', 
  'uses' => 'Horses@horse_table']);

Route::post('/horse-table', [
  'as' => 'horse_table_validate', 
  'uses' => 'Horses@horse_table_validate']);

Route::get('/stall/{horse_id}', [
  'as' => 'stall', 
  'uses' => 'Horses@stall']);
/*------------------------------------------------------------------------
| Owner Horse Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'user'], function () {
  Route::get('/horse/{horse_id?}', [
    'as' => 'horse',  
    'uses' => 'Horses@horse']);
});
/*------------------------------------------------------------------------
| Owner Horse Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'owner'], function () {
  Route::post('/horse/{horse_id?}', [
    'as' => 'horse_validate',  
    'uses' => 'Horses@horse_validate']);

  Route::get('/remove-horse/{horse_id}', [
    'as' => 'remove_horse',  
    'uses' => 'Horses@remove_horse']);

  Route::post('/remove-horse/{horse_id}', [
    'as' => 'remove_horse',  
    'uses' => 'Horses@remove_horse']);
});
/*------------------------------------------------------------------------
| Admin Horse Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'admin'], function () {


});

/*
|--------------------------------------------------------------------------
| Race Routes
|--------------------------------------------------------------------------
*/
/*------------------------------------------------------------------------
| Guest Race Routes
--------------------------------------------------------------------------*/
Route::get('/race-table', [
  'as' => 'race_table', 
  'uses' => 'Races@race_table']);

Route::post('/race-table', [
  'as' => 'race_table_validate', 
  'uses' => 'Races@race_table_validate']);

Route::get('/entry-table/{race?}/{placing?}/{horse?}/{owner?}', [
  'as' => 'entry_table', 
  'uses' => 'Races@entry_table']);

Route::post('/entry-table', [
  'as' => 'entry_table_validate', 
  'uses' => 'Races@entry_table_validate']);
/*------------------------------------------------------------------------
| User Race Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'user'], function () {
  Route::get('/race/{race_id?}', [
    'as' => 'race',  
    'uses' => 'Races@race']);

  Route::get('/entry/{horse_id?}/{entry_id?}', [
    'as' => 'entry',  
    'uses' => 'Races@entry']);
});
/*------------------------------------------------------------------------
| Owner Race Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'owner'], function () {

  Route::post('/entry/{horse_id?}/{entry_id?}', [
    'as' => 'entry_validate',  
    'uses' => 'Races@entry_validate']);

  Route::get('/remove-entry/{entry_id}', [
    'as' => 'remove_entry',  
    'uses' => 'Races@remove_entry']);

  Route::post('/remove-entry/{entry_id}', [
    'as' => 'remove_entry',  
    'uses' => 'Races@remove_entry']);
});
/*------------------------------------------------------------------------
| Admin Race Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'admin'], function () {
  Route::post('/race/{race_id?}', [
    'as' => 'race_validate',  
    'uses' => 'Races@race_validate']);

  Route::get('/remove-race/{race_id}', [
    'as' => 'remove_race',  
    'uses' => 'Races@remove_race']);

  Route::post('/remove-race/{race_id}', [
    'as' => 'remove_race',  
    'uses' => 'Races@remove_race']);
});

/*
|--------------------------------------------------------------------------
| Lineage Routes
|--------------------------------------------------------------------------
*/
/*------------------------------------------------------------------------
| Guest Lineage Routes
--------------------------------------------------------------------------*/
Route::get('/lineage-table', [
  'as' => 'lineage_table', 
  'uses' => 'Lineages@lineage_table']);

Route::post('/lineage-table', [
  'as' => 'lineage_table_validate', 
  'uses' => 'Lineages@lineage_table_validate']);
/*------------------------------------------------------------------------
| User Lineage Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'user'], function () {
  Route::get('/lineage/{relationship?}/{horse_id?}', [
    'as' => 'lineage',  
    'uses' => 'Lineages@lineage']);
});
/*------------------------------------------------------------------------
| Owner Lineage Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'owner'], function () {
  Route::post('/lineage/{relationship?}/{horse_id?}', [
    'as' => 'lineage_validate',  
    'uses' => 'Lineages@lineage_validate']);

  Route::get('/remove-lineage/{horse_id}', [
    'as' => 'remove_lineage',  
    'uses' => 'Lineages@remove_lineage']);

  Route::post('/remove-lineage/{horse_id}', [
    'as' => 'remove_lineage',  
    'uses' => 'Lineages@remove_lineage']);
});
/*------------------------------------------------------------------------
| Admin Lineage Routes
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'admin'], function () {  


});

//adminentication stuff
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',  
  ]);
