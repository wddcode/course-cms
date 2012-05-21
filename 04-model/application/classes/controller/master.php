<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Master extends Controller {

    public function before()
    {       
        parent::before();
		
		$this->session = Session::instance();
		
		if($this->session->get('counter', false))
		{
			$this->session->set('counter', $this->session->get('counter') + 1);
		} else {
			$this->session->set('counter', 0);
		}

    }


    public function after()
    {       
        parent::after();
    }
 
}
