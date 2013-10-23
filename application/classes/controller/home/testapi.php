<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Home_Test extends Controller_Template {

	public function action_index()
	{
    $this->template = Model_Tpl_Outer::call();

    $this->template->content = 'access rights';
    
	}

}
//end