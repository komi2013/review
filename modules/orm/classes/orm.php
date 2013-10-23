<?php defined('SYSPATH') or die('No direct script access.');

class ORM extends Kohana_ORM {

	public function errors($directory = NULL, $translate = TRUE, $file_name = NULL)
	{
    if(isset($file_name)) $this->_alias = $file_name;
    echo Debug::vars($file_name); 
		return $this->generate_errors($this->_alias, $this->_objects, $directory, $translate);
	}

}

