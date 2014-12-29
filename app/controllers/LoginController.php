<?php

class LoginController extends BaseController {

	public function show()
	{
	   return View::make('login');
	}

            public function login()
            {
                dd(Input::all());
            }
}