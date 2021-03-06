<?php

/**
 * Default route. Has to come after specific routes in bootstrap.
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
->defaults(
array(
	'controller' => 'static',
	'action'     => 'index',
));