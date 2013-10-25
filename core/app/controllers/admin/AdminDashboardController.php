<?php

class AdminDashboardController extends BaseController {
	
	protected $layout = 'admin.layouts.default';

	public function index()
	{
		  $this->layout->menuActive = 1;
		  $this->layout->home = true;
		  $this->layout->title = 'Painel de Administração';
		  $this->layout->content = View::make('admin.dashboard');
	}

}