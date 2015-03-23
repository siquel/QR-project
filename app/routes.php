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
	Route::resource('question', 'QuestionController', array('except' => array('index')));

	Route::group(array('prefix' => 'answer'), function() {
		Route::get('quiz', array('as' => 'answer.quiz', 'uses' => 'QuestionController@quiz'));
	});
	
	Route::get('logout', array('as' => 'logout', 'uses' => 'LoginController@logout'));
	Route::resource('teams', 'TeamsController');
    Route::post('/', function()
    {
        return View::make('index');
    });
});
Route::get('/', function() {
	return Redirect::route('login');
})->before('guest');
Route::get('login', array('uses' => 'LoginController@show', 'as' => 'login.show'))->before('guest'); // don't allow login again
Route::post('login', array('before' => 'csrf', 'as' => 'login', 'uses' => 'LoginController@login'));

Route::group(array('prefix' => 'api'), function() {
	Route::get('events', array('uses' => 'ApiController@handleEventRequest'));
});
