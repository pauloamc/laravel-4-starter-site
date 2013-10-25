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


// Route::get('/', function()
//  {
//  	return View::make('site.hello');
//  });



	

/*
| ------------------------------------------------------
|
| ROUTES SITE
|
| ------------------------------------------------------
*/
	
	$languages = Config::get('app.languages');
	$locale = Request::segment(1);
	if (in_array($locale, $languages)):
		App::setLocale($locale);
	else:
		$locale = null;
	endif;

	Route::group(array('prefix' => $locale), function()
	{
		Route::get('/', array('as' => 'site.home', 'uses' => 'HomeController@showWelcome'));
	});


/*
| ------------------------------------------------------
|
| END ROUTES SITE
|
| ------------------------------------------------------
*/


/*
| ------------------------------------------------------
|
| ROUTES BACKOFFICE
|
| ------------------------------------------------------
*/

Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'AdminLoginController@index'));
Route::post('admin/login', array('as' => 'admin.login.auth', 'uses' => 'AdminLoginController@login'));
Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'AdminLoginController@logout'));

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function() {

	Route::get('/', array('as' => 'admin.dashboard', 'uses' => 'AdminDashboardController@index'));

});


