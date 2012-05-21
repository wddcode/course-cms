<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Master {

	public function action_index()
	{
		$html = View::factory('static/home');
		$this->response->body($html);
	}

}
