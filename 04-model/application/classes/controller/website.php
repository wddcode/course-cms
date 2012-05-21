<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller_Template {

	public $page_title;

	public function before()
	{

		parent::before();
		
		if($this->auto_render === true)
		{
			
			// Template shortcut
			$this->t = $this->template;
			
			// bind global template variables
			View::bind_global('page_title', $this->page_title);

			// initialize template elements
			$this->t->head = View::factory('skeleton/head');
			
			// 'visible' template elements, those living in the body
			$this->t->menu = View::factory('skeleton/menu');
			$this->t->header = View::factory('skeleton/header');
			$this->t->content = View::factory('skeleton/wrapper_content');
			$this->t->footer = View::factory('skeleton/footer');
			
		}
	}

	public function after()
	{

		// Set default Scripts and Styles
		
		/**/
		$js_config = Kohana::$config->load('js');
		$css_config = Kohana::$config->load('css');

		$js = '';
		$stylesheets = '';

		foreach($js_config['script'] as $script)
		{
			$js .= Html::script($js_config['js_path'] . $script) . "\r\n";
		}

		foreach($css_config['stylesheet'] as $stylesheet)
		{
			$stylesheets .= Html::style($css_config['css_path'] . $stylesheet) . "\r\n";
		}

		// Assign to templates
		if(isset($this->t))
		{
			$this->t->head->set('js', $js);
			$this->t->head->set('stylesheets', $stylesheets);
		}
		

		parent::after();

	}
	
}
