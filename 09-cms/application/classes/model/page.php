<?php defined('SYSPATH') or die('No direct script access.');
/**
 * artist Model.
 *
 * @package    CMS
 * @category   Model
 * @author     Jonas Ohrstrom
 */
class Model_Page extends ORM  {
	
	protected $_db_group = 'default';
	
	
	protected $_belongs_to = array
	(
	    'parent' => array
	    (
	        'model' => 'page',
	        'foreign_key' => 'parent_id'
	    )
	);
	protected $_has_many = array
	(
	    'children' => array
	    (
	        'model' => 'page',
	        'foreign_key' => 'parent_id',
	    )
	);
 
 	// 
    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 128)),
            ),
            'slug' => array(
                array('not_empty'),
            ),
        );
    }
	
	
	
	/*
	protected $_has_many = array(
		'tags' => array('through' => 'tags_pages'),
	);
	*/
	
	/*
	protected $_belongs_to = array(
		'user' => array(),
	);
	*/
	
	
	protected $sorting = array('name' => 'asc');

	public function __construct($id = NULL)
	{
		// $this->db = Database::instance('default');
		// $this->cache = Cache::instance();

		parent::__construct($id);
	}
	
	
	public function get_absolute_url($action = false)
	{
			
		if($action === 'edit' OR $action === 'delete')
		{
			$url = Route::get('admin')->uri(array(
				'controller' => 'admin',
				'content_type' => 'page',
				'action' => $action,
				'id' => $this->id,
			));
			
			$url = $url;
			
		}
		else {
			$url = Route::get('page')->uri(array(
				'action' => '',
				'slug' => $this->slug,
			));
		}
		
		return $url;
	}




	
	
	/**
	 * Show related Pages
	 * @param $id
	 * @returns Array
	 */
	public function get_relations($id)
	{
		return array();
	}



	/*
	 * Load / Save methods
	 */
	public function save(Validation $validation = NULL)
	{
		$this->slug = Url::title($this->slug);
		parent::save();
	}

}
