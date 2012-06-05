<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Website {

	public function action_index()
	{
		
		$inner_html = '<h1>Page Controller</h1>';
		$inner_html .= '<p>Page Content</p>';
		
		$this->page_title = 'Page Controller';
		$this->template->inner = $inner_html;
		
	}
	
	public function action_test()
	{
		$this->auto_render = FALSE;
		
		$d = ORM::factory('dummy');
		$d->where('id', '=', 1)->find();
		
		print Debug::vars('Loaded: ', $d->loaded());

		if($d->loaded())
		{
			print Debug::vars($d->id);
			print Debug::vars($d->title);
		} else {
			
			$this->response->status(404);
			return false;
		}
	}
	
	public function action_test_tpl()
	{
		
		// Aquire Parameters
		$dummy_id = $this->request->param('id', FALSE);
				
		$d = ORM::factory('dummy');
		$d->where('id', '=', $dummy_id)->find();

		if($d->loaded())
		{
			
			$inner_html = View::factory('layout/section');
			$inner_html->set('title', $d->title);
			
			$this->t->inner = $inner_html;
			
		} else {
			
			$this->response->status(404);
			$this->t->inner = '<h1>Error 404</h1>';
			return false;
		}

	}
	
	public function action_test_tpl_listing()
	{
		
		// Aquire Parameters
		$dummy_id = $this->request->param('id', FALSE);
		
		
		// Display Detail Page or Listing if no id given
		if($dummy_id) {
				
			$d = ORM::factory('dummy');
			$d->where('id', '=', $dummy_id)->find();
	
			if($d->loaded())
			{
				
				$inner_html = View::factory('layout/section');
				$inner_html->set('title', $d->title);
				$inner_html->set('content_main', $d->content);
				
				$this->t->inner = $inner_html;
				
			} else {
				
				$this->response->status(404);
				$this->t->inner = '<h1>Error 404</h1>';
				return false;
			}

		} else {
				
			$d = ORM::factory('dummy')->find_all();
			$inner_html = View::factory('layout/section');
			$inner_html->set('title', 'Dummy List');
			$inner_html->bind('content_main', $content_main);
			
			$content_main = '';
			foreach($d as $dummy)
			{
				$content_entry = '<h2>';
				$content_entry .= HTML::anchor('/page/test_tpl_listing/' . $dummy->id, $dummy->title);
				$content_entry .= '</h2>';
				
				$content_main .= $content_entry;
			}
			
			$this->t->inner = $inner_html;
				
		}
		
		
		// Generate the Navigation/Menu
		$navigation = new ArrayObject;
		
		// Populate Menu
		$items = ORM::factory('dummy')->find_all();
		
		foreach($items as $item)
		{
			$nav_item = new ArrayObject;
			$nav_item->title = $item->title;
			$nav_item->url = '/page/test_tpl_listing/' . $item->id;
			$nav_item->active = ($dummy_id == $item->id) ? true : false;
			$navigation->append($nav_item);
		}
		
		$this->t->menu->navigation = $navigation;
	
	}

}
