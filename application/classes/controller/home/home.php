<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Home_Home extends Controller_Template {

	public function action_index()
	{
    $this->template = Model_Tpl_Outer::call();
    $this->template->title = 'ホーム';
    $this->template->content = View::factory('/home/home_'.$this->template->device);
	}

}
//end