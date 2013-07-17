<?php

class UserController extends BaseController {

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
	public $restful = true;
	public $layout  = "layout.default";
	public function getIndex()
	{
		$data['name'] = "Karan";
		$data['age'] = 24;

		$view=  View::make('users.index', $data);
		$this->layout->title = "User Page";
		$this->layout->content = $view;
	}

}