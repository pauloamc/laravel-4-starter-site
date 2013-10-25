<?php

class AdminLoginController extends BaseController {

	public function index() 
	{
		return View::make('admin.login');
	}


	public function login()
	{
		$input = Input::all();

		$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' => $input['password'],
			'level' => 999,
			'active' => 1
		]);


		if ($attempt) return Redirect::route('admin.dashboard');
		return Redirect::route('admin.login')->withErrors('auth');

	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('admin.login');
	}

}
