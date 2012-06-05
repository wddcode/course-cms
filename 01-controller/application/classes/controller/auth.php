<?php defined('SYSPATH') or die('No direct script access.');

/**
 * CMS Page Controller
 *
 * @package    CMS
 * @category   Controller
 * @author     Jonas Ohrstrom
 */

class Controller_Auth extends Controller {

	public function action_index()
	{
			
		$this->response->body('Authentication');
	}

	public function action_login()
	{
		$this->response->body('login form');
	}

	public function action_logout()
	{
		$this->response->body('logout handling');
	}

}
