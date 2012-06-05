<?php defined('SYSPATH') or die('No direct access allowed.');

$config =  array();

// locations
// $config['css_path'] = Kohana::$base_url . 'static/css/';
$config['css_path'] = 'static/css/';
$config['css_root'] = DOCROOT . 'static/css/';

// files (relative to css_root)
$config['stylesheet'] = array(

	'lib/bootstrap/bootstrap.css',
	'lib/bootstrap/bootstrap-responsive.css',
	'screen.css',

);

return $config;