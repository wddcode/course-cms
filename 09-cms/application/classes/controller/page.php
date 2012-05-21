<?php defined('SYSPATH') or die('No direct script access.');

/**
 * CMS Page Controller
 *
 * @package    CMS
 * @category   Controller
 * @author     Jonas Ohrstrom
 * 
 * 
 */

class Controller_Page extends Controller_Website {
	

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		
	}
	
	public function after()
	{		
		parent::after();
	}
	
	public function action_index__()
	{

		// $this->template->toolbar->menu = $this->menu;
		
		// headline
		$this->page_title = 'Main Page';
		$this->t->inner = View::factory('static/home');
		
		$inner_html = '';
		
		$section = View::factory('layout/section');
		$section->title = 'test';
		$section->subtitle = 'whatever';
		
		
		$inner_html .= $section;
		
		$this->t->inner = $inner_html;
		
	}
	
	public function action_index()
	{
		
		
		$this->active_page = false;
		
		$slug = $this->request->param('slug', false);
		
		// 	print $slug;

		$this->auto_render = false;
		
		$page = ORM::factory('page');
		$page->where('slug', '=', $slug)->find();
		
		if ($page->loaded())
		{
			
			$this->active_page = $page;			
			
			// Title for browser-window
			$this->page_title = $page->name;
			
			// Page header
			$this->t->header->title = $page->name;
			$this->t->header->subtitle = $page->subtitle;
			
			
			$inner_html = '';

			// Initialize sub-navigation array
			$sub_navigation = new ArrayObject;
			
			foreach($page->children->find_all() as $child)
			{
				$section = View::factory('layout/section');
				$section->title = $child->name;
				$section->section_id = $child->slug;
				$section->subtitle = 'whatever';
				$inner_html .= $section;
				
				// Populate sub_navigation
				$nav_item = new ArrayObject;
				$nav_item->name = $child->name;
				$nav_item->slug = $child->slug;
				$sub_navigation->append($nav_item);
			}
			
			// Apply Subnavigation if any
			if(count($sub_navigation) > 0)
			{
				$this->t->subnav = View::factory('skeleton/subnav', array('sub_navigation' => $sub_navigation));
			}
			
			
			// testing with content_html
			$inner_html .= $page->content_html;
			
			
			
			
			// 'plugins'
			if($page->slideshow_enabled AND $page->slideshow_directory AND 1 === 2)
			{
				
				$data_config = Kohana::$config->load('data');
				$data_root = $data_config['data_root'];

				
				$files = Fs::dir_to_arr($data_root . $page->slideshow_directory);

				$slides = new ArrayObject;
				foreach($files as &$file)
				{					
					$slide = new ArrayObject;
					$slide->full_path = $file;
					$slide->file = substr($file, strlen($data_root));
					$slide->url = Route::get('image')->uri(array('action' => 'index',))
					. '/?path=' . $slide->file . '&w=770';
					
					$slides->append($slide);
					
				}

				$section = View::factory('layout/section');
				$section->bind('content_main', $slideshow_html);
				$section->set('content_sidebar', Debug::vars($slides));
				
				$slideshow_html = View::factory('layout/slideshow', array('slides' => $slides));
				
				$inner_html .= $section;
			}
			
			
			
			// Apply composed HTML to template variable			
			$this->t->inner = $inner_html;
			
			$this->auto_render = true;
			
		}
		else
		{
		    print '404';
		}		
	}

}


