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

		// Set scripts and styles
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
		
		
		// Generate the Navigation/Menu
		$navigation = new ArrayObject;
		
		// Add some static Navigation nodes
		$nav_item = new ArrayObject;
		$nav_item->name = 'Home';
		$nav_item->url = "/";
		$nav_item->active = ($this->request->uri() == $nav_item->url) ? true : false;
		$navigation->append($nav_item);

		
		// Populate Menu with cms pages
		$root_pages = ORM::factory('page')
		->where('parent_id', '=', NULL)
		->find_all();
		
		foreach($root_pages as $page)
		{
			$nav_item = new ArrayObject;
			$nav_item->name = $page->name;
			$nav_item->url = $page->get_absolute_url();
			$nav_item->active = (isset($this->active_page) AND $this->active_page == $page) ? true : false;
			$navigation->append($nav_item);
		}
		
		$this->t->menu->navigation = $navigation;
		

		parent::after();

	}
	
}
