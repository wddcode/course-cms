<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Website {
	

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		
	}
	
	public function before()
	{
		parent::before();
	}
	
	public function action_login()
	{
		// headline
		$this->page_title = 'CMS Login';
		$this->t->header->title = 'CMS Login';
		$this->t->header->subtitle = '';
		
		$this->t->inner = '<h1>static..</h1>';
		$this->t->inner .= Auth::instance()->hash('user');

		// Handle form template
		$form_view = View::factory('auth/login_form')
    		->set('values', $_POST)
    		->bind('errors', $errors);
			
		if ($_POST)
	    {
	 
	 		$username = Arr::get($_POST, 'username', false);
	 		$password = Arr::get($_POST, 'password', false);
	 
	 		$this->auth->login($username, $password);
	 	
			if($this->auth->logged_in())
	        {    
	            $next = $this->request->query('next');
	            $this->request->redirect(($next) ? $next : '/');
	        }
			else {
	            $errors = array('password' => 'Please check the password', 'username' => 'Please check the username');
	        }
	 
	    }
		
		$this->t->inner = $form_view;
	}
	
	
	
	public function action_logout()
	{
		$this->auth->logout();
        $next = $this->request->query('next');
        $this->request->redirect(($next) ? $next : '/');
	}
	
		
	public function after()
	{
		parent::after();
	}

}


