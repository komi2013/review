<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Answer_Ing extends Controller_Template {
	public function action_index()
	{
    $this->template = Model_Tpl_Answer::call();
    $session = Session::instance('database');
    $u_id = Model_Check_Session::tpl('u_id',$session,$this->template);
    $enqu_id = Model_Check_Session::tpl('enqu',$session,$this->template);
    $currentq = Model_Check_Session::tpl('nextq',$session,$this->template);
//     $currentq = $session->get('nextq');
    if ($currentq == 'end')
    {
      $this->request->redirect('/answer/end/ ');
    }
    $question = Model_Check_Question::json($enqu_id,$currentq);
    $this->template->title = $question->txt;
    if ($question->type == 1)
    {
      error_reporting(E_ALL & E_NOTICE);
      $ancho = ORM::factory('V1_DtAncho')
        ->where('qu_id', '=', $question->id)
        ->where('u_id', '=', $u_id)
        ->find();
      if ($ancho->loaded())
      {
        $session->set('nextq', $currentq +1);
        $this->request->redirect('/answer/ing/ ');
      }
      $qucho = ORM::factory('V1_DtQucho')
        ->where('qu_id', '=', $question->id)
        ->order_by('qu_id','asc')
        ->find_all();
      $this->template->content = View::factory('answer/ing_cho_'.$this->template->device);
      $this->template->content->qu = $question;
      $this->template->content->qucho = $qucho;
    }
    elseif ($question->type == 5)
    {
      $antxt = ORM::factory('V1_DtAntxt')
        ->where('qu_id', '=', $question->id)
        ->where('u_id', '=', $u_id)
        ->find();
      if ($antxt->loaded())
      {
        $session->set('nextq', 'end');
        $this->request->redirect('/answer/ing/ ');
      }
      $this->template->content = View::factory('answer/ing_txt_'.$this->template->device);
      $this->template->content->qu = $question;
    }
//     Cookie::set('spend_time', time());
	}
}
//end