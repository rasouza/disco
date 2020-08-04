<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$nightclub = Nightclub::all();
	return View::make('home')->with('nightclubs', $nightclub);
});

Route::get('owner/list', function()
{
	$nightclub = Nightclub::all();
	return View::make('owner.index')->with('nightclubs', $nightclub);
});

Route::get('admin/list', function()
{
	$nightclub = Nightclub::all();
	return View::make('admin.index')->with('nightclubs', $nightclub);
});

Route::get('owner/view/{id}', 'OwnerController@view');
Route::get('admin/edit/{id}', 'AdminController@edit');
Route::get('nightclub/view/{id}', 'NightclubController@viewNightclub');
Route::post('nightclub/rate/{id}', 'NightclubController@rateNightclub');
Route::post('admin/edit-confirm/{id}', 'AdminController@editConfirm');
