<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Filesystem Helper
 *
 * @package    CMS
 * @category   Helper
 * @author     Jonas Ohrstrom
 * 
 * 
 */

 
class Fs {


	/**
 	 * Directory Scanner (recursive)
	 * 
	 * Some more to say?
     * @return array
     */
	public static function dir_to_arr($directory, $recursive = true)
	{
		//var_dump($directory);
		
		$array_items = array();
		if ($handle = opendir($directory)) {
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") {
					if (is_dir($directory. "/" . $file)) {
						if($recursive) {
							$array_items = array_merge($array_items, Fs::dir_to_arr($directory. "/" . $file, $recursive));
						}
						$file = $directory . "/" . $file;
						$array_items[] = preg_replace("/\/\//si", "/", $file);
					} else {
						$file = $directory . "/" . $file;
						$array_items[] = preg_replace("/\/\//si", "/", $file);
					}
				}
			}
			closedir($handle);
		}
		return $array_items;
	}

}