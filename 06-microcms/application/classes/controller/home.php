<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Website {
	

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
	
	}
	
	public function action_index()
	{
		
		// headline
		$this->t->header->title = 'Main Page';
		$this->t->header->subtitle = 'LaLiLo . 123';
		
		$this->t->inner = View::factory('static/home');
		
	}
	
	public function action_test()
	{
		
		$this->auto_render = false;
		print 'test';
				
	}

}


