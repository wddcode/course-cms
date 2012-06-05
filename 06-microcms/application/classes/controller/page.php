<?php defined('SYSPATH') or die('No direct script access.');

/**
 * CMS Page Controller
 *
 * @package    CMS
 * @category   Controller
 * @author     Jonas Ohrstrom 
 * 
 */

class Controller_Page extends Controller_Website {
	
	public function before()
	{		
		parent::before();
	}
	
	public function action_index()
	{

		$this->active_page = false;		
		$slug = $this->request->param('slug', false);
		
		$page = ORM::factory('page');
		$page->where('slug', '=', $slug)->find();
		
		if ($page->loaded())
		{
			
			$this->active_page = $page;			
			
			// Title for browser-window
			$this->page_title = $page->title;
			
			// Page header
			$this->t->header->title = $page->title;
			$this->t->header->subtitle = $page->subtitle;
	
			// Page content
			$this->t->inner = View::factory('cms/' . $page->template)
			->set('content_main', $page->content_main)
			->set('content_sidebar', $page->content_sidebar);
			
			
			
			$this->auto_render = true;
			
		}
		else
		{
		    print '404';
		}		
	}
	
	
	public function after()
	{		
		parent::after();
	}

}
