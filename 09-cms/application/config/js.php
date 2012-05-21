<?php defined('SYSPATH') or die('No direct access allowed.');

$config =  array();

// locations
// $config['js_path'] = Kohana::$base_url . 'static/js/';
$config['js_path'] = 'static/js/';
$config['js_root'] = DOCROOT . 'static/js/';

// files (relative to js_root)
$config['script'] = array(

	'lib/jquery.js',
	'lib/bootstrap/bootstrap.min.js',
	'base.site.js',

);

return $config;