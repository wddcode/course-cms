<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Website {
	
	
	public function before()
	{	
		parent::before();
	}
	
	public function action_index()
	{
	
		// headline
		$this->page_title = 'CMS Admin';
		
		$this->t->header->title = 'CMS Admin';
		$this->t->header->subtitle = 'Do whatever you want!';
		
		$this->t->inner = View::factory('admin/index');
		
		$inner_html = '';
		
		$section = View::factory('layout/section');
		$section->title = 'Pages';
		$section->subtitle = 'CMS-Pages';
		
		// Get page listing
		$pages = ORM::factory('page')->find_all();
		
		$page_list = View::factory('admin/page_list');
		$page_list->set('pages', $pages);

		$section->content_main = $page_list;
			
		$inner_html .= $section;
		$this->t->inner .= $inner_html;
		
	}
	
	public function action_edit()
	{
		
		$content_type = $this->request->param('content_type', false);
		$content_id = $this->request->param('id', false);
		
		// Edit section for pages
		if($content_type == 'page' AND $content_id)
		{
		
			$page = ORM::factory('page', $content_id);
			
			if(!$page->loaded())
			{
				print 404;
				exit;
			}
			
			$this->t->header->title = 'Edit: ' . $page->name;

			// Handle form template
			$form_view = View::factory('admin/page_edit_form', array('page' => $page))
        		->set('values', Arr::merge($page->as_array(), $_POST))
        		->bind('errors', $errors);
				
			if ($_POST)
		    {
		    	// Set values to page-model
				$page->values($_POST);					
		        try
		        {
		            $page->save();
		            $this->request->redirect($page->get_absolute_url('edit'));
		        }
		        catch (ORM_Validation_Exception $e)
		        {
		            $errors = $e->errors('models');
		        }
		    }
			
			$this->t->inner = $form_view;
					
		}
	}
	
	public function action_delete()
	{
		
		$content_type = $this->request->param('content_type', false);
		$content_id = $this->request->param('id', false);
		
		// Delete section for pages
		if($content_type == 'page' AND $content_id)
		{
			$page = ORM::factory('page', $content_id);	
			if(!$page->loaded())
			{
				print 404;
				exit;
			}
	        try
	        {
	            $page->delete();
	            $this->request->redirect(Route::get('admin')->uri(
			    	array('action' => 'index',)
				));
	        }
	        catch (ORM_Validation_Exception $e)
	        {
	            $errors = $e->errors('models');
				print $errors;
				exit;
	        }
					
		}
		
	}
	
	public function action_create()
	{
		
		$content_type = $this->request->param('content_type', false);
	
		// Delete section for pages
		if($content_type == 'page')
		{
			$page = ORM::factory('page');
			
			// Sorry - a bit hackish...
			$page->name = 'Neue Seite';
			$page->slug = md5(uniqid(rand(), true));

			
			$page->save();
			$this->request->redirect($page->get_absolute_url('edit'));
		}
		
	}
	
	public function after()
	{
		
		// Breadcrumbs
		 foreach($segments = explode('/', $this->request->uri()) as $key => $page)
        {
                $pages[] = array(
                        'title' => $page,
                        'url'   => (join('/', array_slice($segments, 0, ($key + 1))))
                );
        }
		
		$js_admin = array(
			'lib/wymeditor/jquery.wymeditor.min.js',
			'lib/wymeditor/plugins/hovertools/jquery.wymeditor.hovertools.js',
			'lib/tiny_mce/jquery.tinymce.js',
			'lib/epiceditor/epiceditor.js',
			'admin.base.js',
		);
		
		$css_admin = array(
			// 'base.admin.css',
		);
		
		$js_config = Kohana::$config->load('js');
		$js_config->set('script', Arr::merge($js_config['script'], $js_admin));
		
		$css_config = Kohana::$config->load('css');
		$css_config->set('stylesheet', Arr::merge($css_config['stylesheet'], $css_admin));
				
		parent::after();
	}

}


