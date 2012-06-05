<?php defined('SYSPATH') or die('No direct script access.');


class Model_Dummy extends ORM  {
	
	/*
	protected $_db_group = 'default';
	protected $sorting = array('name' => 'asc');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	public function save(Validation $validation = NULL)
	{
		parent::save();
	}
	*/
	
	public function get_absolute_url()
	{
		return 'static/test/' . $this->id;
	}

}
