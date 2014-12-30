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
	Route::get('/dashboard', 'DashboardController@show');


            Route::get('/', function()
            {
                return View::make('index');
            });
});
Route::resource('user', 'UserController');
Route::get('login', 'LoginController@show');
Route::post('login', array('as' => 'login', 'uses' => 'LoginController@login'));
Route::resource('event', 'EventController');

