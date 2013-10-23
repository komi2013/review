<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Statics_Txt extends Controller_Template {
	public function action_index()
	{
    $this->template = Model_Tpl_Outer::call();
    $enqu_id = Model_Check_Get::tpl('enqu',$this->template);
    $session = Session::instance('database');
    Model_Check_Session::tpl('pv_u_id',$session,$this->template);
    $enquete = Model_Check_Enquete::tpl($enqu_id,$session,$this->template);
    Model_Check_EnquStatics::tpl($enquete,$this->template);
    
    $question = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->where('number', '=', 5)
      ->find();
    $antxt = ORM::factory('V1_DtAntxt')
      ->where('qu_id', '=', $question->id)
      ->order_by('id','desc')
      ->find_all();
    $this->template->title = $enquete->title;
		$this->template->content = View::factory('statics/txt');
    $this->template->content->title = $enquete->title;
    $this->template->content->q_txt = $question->txt;
    $this->template->content->antxt = $antxt;
  }
}
//end