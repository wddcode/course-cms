<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Master {

    public function before()
    {       
        parent::before();
	}

	public function action_index()
	{
		
		$html = View::factory('static/base');
		$html->bind('footer', $footer);
		
		
		$footer = View::factory('skeleton/footer');
		
		$text_version = 'test: ' . $this->session->get('counter');
		
		$footer->set('text_version', $text_version);
		
		$this->response->body($html);
	}


	public function action_contact()
	{
		
		$html = View::factory('static/contact')
		->bind('title', $my_title)
		->bind('content', $my_content);
		
		$my_content = 'Kontaktseite etc..';
		
		$this->response->body($html);
	}

    public function after()
    {       
        parent::after();
	}

}
