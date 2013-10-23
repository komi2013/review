<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Statics_Choice extends Controller_Template {
	public function action_index()
	{
    $this->template = Model_Tpl_Outer::call();
    $enqu_id = Model_Check_Get::tpl('enqu',$this->template);
    $q_num = Model_Check_Get::tpl('q_num',$this->template);
    $session = Session::instance('database');
    Model_Check_Session::tpl('pv_u_id',$session,$this->template);
    $enquete = Model_Check_Enquete::tpl($enqu_id,$session,$this->template);
    Model_Check_EnquStatics::tpl($enquete,$this->template);
    $question = Model_Check_Question::tpl($enqu_id,$q_num,$this->template);

    $qucho = ORM::factory('V1_DtQucho')
      ->where('qu_id', '=', $question->id)
      ->order_by('id')
      ->find_all();    
    $denominator = 0;
    $sm_q_answer = 0;
    foreach ($qucho as $kk => $dd)
    {
      $denominator = $denominator + $dd->sum;
      $statics[$question->number]['sum'][$dd->txt] = $dd->sum;
      $sm_q_answer = $sm_q_answer + $dd->sum;
    }  
    $statics[$question->number]['q_txt']  = $question->txt;
    $statics[$question->number]['denominator']  = $denominator;
    
    $this->template->content = View::factory('statics/choice');
		$this->template->content->statics = $statics;
    $this->template->content->enquete = $enquete;
    $this->template->title = $enquete->title;
    $this->template->content->title = $enquete->title;
  }
}
//end