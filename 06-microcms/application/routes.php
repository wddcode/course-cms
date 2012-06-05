<?php
Route::set('page', '(page/(<slug>)(/<action>))',
array(
	'slug'=>'.[^/]+',
	'action' => 'index|edit',
))
->defaults(
array(
    'controller' => 'page', 
    'action' => 'index',
    'slug' => 'home',
));


/**
 * Admin Routes
 */
Route::set('admin', '<controller>(/<action>(/<content_type>(/<id>)))')
->defaults(
array(
	'controller' => 'admin',
	'content_type'     => 'page',
	'action'     => 'index',
	'id'     => false,
));


/**
 * Auth Routes
 */
Route::set('auth', '<controller>(/<action>)')
->defaults(
array(
	'controller' => 'auth',
	'action'     => 'login',
));


/**
 * Default route. Has to come after specific routes in bootstrap.
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
->defaults(
array(
	'controller' => 'home',
	'action'     => 'index',
));