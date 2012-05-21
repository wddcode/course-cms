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
		
		// Debug
		$this->log->add(Log::DEBUG, 'Requested Image: :path', array(':path' => $path,));
		//print Debug::vars($path);
		
		// Get config
		$data_config = Kohana::$config->load('data');
		$data_root = $data_config['data_root'];
		$data_cache = $data_config['data_cache'];
		$cache_path = $data_config['cache_path'];
		
		
		$src = $data_root . $path;
		$cached_filename = sprintf("%sx%s_", $width, $height) . URL::title(str_replace('/', '-', $path));
		$cached_src = $data_cache . $cached_filename;


		if(file_exists($cached_src))
		{
			$path = $cache_path . $cached_filename;
						
			Request::current()->redirect($path);
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
			
			Request::current()->redirect($path);
			
		}
		else {
			print 404;
			exit;
		}

		$image = Image::factory($src);
		// $image->resize($width, $height);
		//$this->response->headers('Content-type', File::mime($src));
		//$this->response->send_headers();

		// $this->response->body( $image->render() );
		
		
		//print Debug::vars($src);
		//print Debug::vars($data_cache);
		//print Debug::vars($cached_src);
		
		
		
	}
	
	public function after()
	{		
		parent::after();
	}

}
