<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template extends Controller_Master {

    public $template = 'base';
    public $auto_render = TRUE;

    public function before()
    {
		parent::before();
        if($this->auto_render === TRUE)
        {
        	$this->template = View::factory($this->template);
        }   
    }

	public function after()
	{
		if ($this->auto_render === TRUE)
		{
			$this->response->body($this->template);
		}
		return parent::after();
	}
} 
