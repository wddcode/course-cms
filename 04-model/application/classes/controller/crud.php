<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Crud extends Controller_Master {

	public function action_index()
	{
		print Debug::vars('crud/index');	
	}

	public function action_create()
	{
		
		print Debug::vars('crud/create');
		
		$d = ORM::factory('dummy');
		$d->name = 'Mein Test Eintrag...';
		$d->save();	
		
		print Debug::vars('dummy created - id: ' . $d->id);
	}

	public function action_read()
	{
		
		print Debug::vars('crud/read');
		
		$d = ORM::factory('dummy')->where('id', '=', 6)->find();
		
		if(!$d->loaded())
		{
			print Debug::vars(404);
			return FALSE;
		} else {
			print Debug::vars('dummy ok - name: ' . $d->name);
		}
	}

	public function action_update()
	{
		
		print Debug::vars('crud/update');
		
		$d = ORM::factory('dummy')->where('id', '=', 6)->find();
		
		if(!$d->loaded())
		{
			print Debug::vars(404);
			return FALSE;
		} else {
			$d->name = 'Aktualsierter Eintrag.';
			$d->save();
			print Debug::vars('dummy updated - id: ' . $d->id);
		}
	}

	public function action_delete()
	{
		
		print Debug::vars('crud/delete');
		
		$d = ORM::factory('dummy')->where('id', '=', 6)->find();
		
		if(!$d->loaded())
		{
			print Debug::vars(404);
			return FALSE;
		} else {
			if($d->delete())
			{
				print Debug::vars('dummy deleted');	
			}
		}
	}

}
