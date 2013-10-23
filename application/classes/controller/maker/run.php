<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Maker_Run extends Controller_Template {
	public function action_index()
	{
    $this->template = Model_Tpl_Outer::call();
    $enqu_id = Model_Check_Get::tpl('enqu',$this->template);
    $session = Session::instance('database');
    Model_Check_Session::tpl('pv_u_id',$session,$this->template);
    $enqu = Model_Check_Enquete::tpl($enqu_id,$session,$this->template);
    Model_Check_EnquStatus::tpl($enqu,$this->template);

    $this->template->content = View::factory('maker/run');
    $this->template->content->enqu = $enqu;

  }
}
//end