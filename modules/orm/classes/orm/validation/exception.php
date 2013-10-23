<?php defined('SYSPATH') or die('No direct script access.');
/**
 * ORM Validation exceptions.
 *
 * @package    Kohana/ORM
 * @author     Kohana Team
 * @copyright  (c) 2008-2009 Kohana Team
 * @license    http://kohanaphp.com/license
 */
class ORM_Validation_Exception extends Kohana_ORM_Validation_Exception {

	public function errors($directory = NULL, $translate = TRUE, $file_name = NULL)
	{
//     echo Debug::vars($this->_alias);
    if(isset($file_name)) $this->_alias = $file_name;
//     echo Debug::vars($file_name); 
		return $this->generate_errors($this->_alias, $this->_objects, $directory, $translate);
	}


}
