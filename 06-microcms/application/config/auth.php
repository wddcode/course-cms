<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'file',
	'hash_method'  => 'sha256',
	'hash_key'     => 'gUOfAQi6isWgdBqa50NoMHjwcuDFc9LLIax6FFTt',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	/*
	 * Username/password combinations for the Auth File driver
	 * use $this->auth->hash('cleartext-password');
	 * to create new onws.. 
	 */
	'users' => array(
		'user' => 'cf91f519e3411fc1051d28206e877285b8abed4f03e23fadf39ed7bd10858b95',
	),

);
