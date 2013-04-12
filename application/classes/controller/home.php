<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Home extends Controller_All {

	public function action_index()
	{
    parent::all();
    $this->template->content = View::factory('five/home/'.$this->lang);
//     $this->template->content->lang = $this->lang;
	}

}
//end