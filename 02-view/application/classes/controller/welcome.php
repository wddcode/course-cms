<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Master {

	public function action_index()
	{	
		$this->response->body('Bongiorno, la terra!');
	}

}
