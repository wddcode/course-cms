<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Website {
	
	
	public function before()
	{
		parent::before();
	}
	
	public function action_login()
	{
		// headline
		$this->page_title = 'CMS Login';
		$this->t->header->title = 'CMS Login';
		
		// Auth::instance()->hash('user');
		
		// print Debug::vars($this->session->get('user'));

		// Handle form template
		$form_view = View::factory('auth/login_form')
    		->set('values', $_POST)
    		->bind('errors', $errors);
			
		if ($_POST)
	    {
	 
	 		$username = Arr::get($_POST, 'username', false);			
	 		$password = Arr::get($_POST, 'password', false);
	 
	 		// print Debug::vars($username);
	 		// print Debug::vars($password);
	 		
	 
	 		// $this->auth->login($username, $password);
	 		
	 		
	 		if($username == 'jonas' AND $password == 'passwort')
			{
				// print Debug::vars('ok! matches!');
				$this->session->set('user', $username);
				$this->request->redirect('/auth/login/');
				
			} else {
				// print Debug::vars('no! does not match!');
				$errors = array('password' => 'Please check the password', 'username' => 'Please check the username');
			}
	 		
	 	
			if($this->auth->logged_in())
	        {    
	            $next = $this->request->query('next');
	            // $this->request->redirect(($next) ? $next : '/');
	        }
			else {
	            // $errors = array('password' => 'Please check the password', 'username' => 'Please check the username');
	        }
	    }
		
		if(! $this->session->get('user'))
		{
			$this->t->inner = $form_view;
		}
		else
		{
			$this->t->inner = 'already logged in: ' . HTML::anchor('auth/logout', 'Logout');
		}
		
	}
	
	
	
	public function action_logout()
	{
		$this->session->set('user', FALSE);
		$this->request->redirect('/auth/');
	}
	
	
	
	
	public function action_login_2()
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
	
	
	
	public function action_logout_2()
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


