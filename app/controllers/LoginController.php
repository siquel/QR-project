<?php 

class LoginController extends BaseController {

	public function show()
	{
		return View::make('login');
	}
}