<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Master {

	public function action_index()
	{	
		$this->response->body('Bongiorno, la terra!');
	}

}
