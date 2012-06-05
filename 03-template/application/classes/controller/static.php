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
		
		// $this->auto_render = TRUE;
		
	}

	public function action_test()
	{
		
		$inner_html = '<h1>Mein Test</h1>';
		$inner_html .= '<p>Section Test</p>';
		
		/*
		$config_app = Kohana::$config->load('app');
		$string_version = sprintf('%s | %s', $config_app['version']['number'], $config_app['version']['name']);
		$inner_html .= '<br />' . $string_version;
		*/
		
		$this->page_title = 'Mein Test';
		$this->template->inner = $inner_html;
		
		// $this->auto_render = TRUE;
		
	}

}
