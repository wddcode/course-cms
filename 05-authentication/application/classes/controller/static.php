<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Website {

	public function action_index()
	{
		
		$inner_html = '<h1>Section Title</h1>';
		$inner_html .= '<p>Section Content</p>';
		
		/*
		$config_app = Kohana::$config->load('app');
		$string_version = sprintf('%s | %s', $config_app['version']['number'], $config_app['version']['name']);
		$inner_html .= '<br />' . $string_version;
		*/
		
		$this->page_title = 'Mein Home';
		$this->template->inner = $inner_html;
		
		$this->auto_render = TRUE;
		
	}

	public function action_contact()
	{
		
		$inner_html = '<h1>Contact</h1>';
		$inner_html .= '<p>Section Content</p>';

		
		$this->page_title = 'Mein Home';
		$this->template->inner = $inner_html;
		
		$this->auto_render = TRUE;
		
	}

	public function action_test()
	{
		

		$dummy_id = $this->request->param('id', FALSE);
		
		
		$dummy = ORM::factory('dummy')->where('id', '=', $dummy_id)->find();
		
		$inner_html = View::factory('element/dummy_detail', array('dummy' => $dummy));
		$inner_html->bind('links', $links);
		
		$links = ORM::factory('dummy')->find_all();

		
		$this->page_title = $dummy->title;
		$this->template->inner = $inner_html;
		
		//$this->auto_render = FALSE;
		
	}

}
