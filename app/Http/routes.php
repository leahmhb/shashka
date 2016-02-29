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
Route::get('/add-horse', 'Horse@add_horse');
Route::post('/add-horse', 'Horse@add_horse_validate');
Route::get('/add-race', 'Race@add_race');
Route::post('/add-race', 'Race@add_race_validate');

Route::get('/add-lineage', 'Lineage@add_lineage');
Route::post('/add-lineage', 'Lineage@add_lineage_validate');



Route::get('/stall/{horse_id}', 'Horse@stall_page');

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
