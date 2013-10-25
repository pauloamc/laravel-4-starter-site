<?php

use Pauloamc\Helpers\Helpers;

class HomeController extends BaseController {

	//protected $layout = 'layouts.default';

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$helper = new Helpers;
		$helloworld = $helper->helloWorld();
		return View::make('site.hello')->with('helloworld', $helloworld);
	


	}

}