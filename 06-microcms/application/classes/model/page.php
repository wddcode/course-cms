<?php defined('SYSPATH') or die('No direct script access.');
/**
 * artist Model.
 *
 * @package    CMS
 * @category   Model
 * @author     Jonas Ohrstrom
 */
class Model_Page extends ORM  {
	
	protected $sorting = array('name' => 'asc');
	
	/**
	 * Validation rules
	 */
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
	
	/**
	 * Permalink method
	 * returns page uri or admin controller depending on action
	 */
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
	 * Load / Save methods
	 */
	public function save(Validation $validation = NULL)
	{
		/*
		 * Slugify:
		 * eg "My First Page" becomes "my-first-page"
		 */
		$this->slug = Url::title($this->slug);
		parent::save();
	}

}
