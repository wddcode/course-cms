<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Master extends Controller  {

	public $internal = false;

	public function before()
	{

		parent::before();

		Profiler::start('Master', __FUNCTION__);
		//$this->profiler = new Profiler;

		$lang_array = array('en' => 'en-us', 'de' => 'de-de');
		if(Request::current()->param('lang'))
		{
			I18n::$lang = $lang_array[Request::current()->param('lang')];
		}

		// Logging
		$this->log = Kohana_Log::instance();
		



	}


	public function __construct(Request $request, Response $response)
	{

		parent::__construct($request, $response);

		// $this->session = Session::instance('cookie');
		
		// Authentication
		$this->auth = Auth::instance();
	}

	public function after()
	{
		parent::after();

	}


}
