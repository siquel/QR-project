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

Route::group(array('before' => 'auth'), function() {
	//Route::get('/dashboard', 'DashboardController@show');
	Route::resource('user', 'UserController');
	Route::resource('event', 'EventController');
	Route::get('logout', array('as' => 'logout', 'uses' => 'LoginController@logout'));
    Route::get('/', function()
    {
        return View::make('index');
    });
});

Route::get('login', 'LoginController@show');
Route::post('login', array('before' => 'csrf', 'as' => 'login', 'uses' => 'LoginController@login'));


