<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Master extends Controller {

    public function before()
    {       
        parent::before();
		
		$this->auth = Auth::instance();
		$this->session = Session::instance();
		

    }


    public function after()
    {       
        parent::after();
    }
 
}
