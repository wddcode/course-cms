<?php defined('SYSPATH') or die('No direct access allowed.');

$config =  array();
 
$config['nodes'] = array(

	'home' => array(
		'title' => 'Home',
		'url' => 'static/index',
	),

	'about' => array(
		'title' => 'About',
		'url' => 'static/test',
	),

	'contact' => array(
		'title' => 'Contact',
		'url' => 'static/contact',
	),

);

return $config;