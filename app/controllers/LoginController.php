<?php

class LoginController extends BaseController {

	public function show()
	{
	   return View::make('login');
	}

    public function login()
    {
        if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))) {
        	return Redirect::to('dashboard');
        } else {
        	return Redirect::to('login')
        		->with('message', 'Your username/password combination was incorrect')
        		->withInput();
        }
    }

    public function logout() {
    	Auth::logout();
    	return Redirect::to('login');
    }
} 