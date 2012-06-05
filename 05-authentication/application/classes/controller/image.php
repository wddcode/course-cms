<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Image extends Controller_Master {
	

	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
		
	}
	
	public function before()
	{		
		parent::before();
	}
	
	public function action_index()
	{
		// Get query variables
		$path = $this->request->query('path');
		$width = $this->request->query('w');
		$height = $this->request->query('h');
		
		// Get config
		$data_root = DOCROOT . 'data/media/';
		$data_cache = DOCROOT . 'cache/media/';
		$cache_path = 'cache/media/';
		
		
		$src = $data_root . $path;
		$cached_filename = sprintf("%sx%s_", $width, $height) . (str_replace('/', '-', $path));
		$cached_src = $data_cache . $cached_filename;
		
		// debug
		print Debug::vars($src);
		print Debug::vars($cached_filename);
		print Debug::vars($cached_src);


		if(file_exists($cached_src))
		{
			$path = $cache_path . $cached_filename;
						
			//Request::current()->redirect($path);
		}
		else if(file_exists($src)) {
			$path = $cache_path . $cached_filename;
			
			if(!is_dir($data_cache))
			{
				mkdir($data_cache);
			}

			$image = Image::factory($src);
			$image->resize($width, $height);
			
			$image->save($cached_src);
			
			//Request::current()->redirect($path);
			
		}
		else {
			// TODO: Use propper status code etc
			print 404;
			exit;
		}
		
		
		
	}
	
	public function after()
	{		
		parent::after();
	}

}
