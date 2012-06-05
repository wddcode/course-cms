<?php defined('SYSPATH') or die('No direct script access.');

/**
 * CMS Page Controller
 *
 * @package    CMS
 * @category   Controller
 * @author     Jonas Ohrstrom
 */


class Controller_Welcome extends Controller {

	public function action_index()
	{	
		$this->response->body('Bongiorno, la terra!');
	}

	public function action_neu()
	{	
		$this->response->body('Neu!!');
	}

}