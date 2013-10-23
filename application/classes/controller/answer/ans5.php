<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Ans5 extends Controller_All {
	public function action_index()
	{
    parent::all();
		$this->q_num = $this->request->param('two');

    if ($this->q_num == 'profile')
    {
      $this->profile();
    }
    elseif ($this->q_num == 0) //with passwd
    {
      $this->action_permit();
    }
    elseif ($this->q_num < 7)
    {
      $this->action_answer();
    }
	}
	public function action_answer()
	{
    $this->u_id = Session::instance()->get('u_id');
    if (Cookie::get('enqu_ans') != $this->enqu_id) die('you can not access this page');
		$question = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->where('q_num', '=', $this->q_num)->find();  
    $nextq = Cookie::get('nextq');
    if (!$question->loaded())
    {
		  $question = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->order_by('q_num','desc')->find();
      if ($question->q_num == $nextq -1) $this->request->redirect('/'.$this->lang.'/end5/'.$this->enqu_id.'/ ');
    } 
//     if (!$question->loaded()) $this->request->redirect('/en/endans/'.$this->enqu_id.'/');
    if ($nextq != $this->q_num)  $this->request->redirect('/'.$this->lang.'/ans5/'.$this->enqu_id.'/'.$nextq.'/ ');
    error_reporting(E_ALL & E_NOTICE);  
    $ancho = ORM::factory('ancho')->where('p_qu_id', '=', $question->id)->where('u_id', '=', $this->u_id)->find();
    $antxt = ORM::factory('antxt')->where('p_qu_id', '=', $question->id)->where('u_id', '=', $this->u_id)->find();
    if ($ancho->loaded() OR $antxt->loaded())
    {
      $nextq = $this->q_num + 1;
      Cookie::set('nextq', $nextq);
      $this->request->redirect('/'.$this->lang.'/ans5/'.$this->enqu_id.'/'.$nextq.'/');
      //I should set tmp_nextq on Cookie from ancho and qucho DB, minimum tmp_nextq should be nextq and redirect 
    }
    $qucho = ORM::factory('qucho')->where('p_qu_id', '=', $question->id)->order_by('id')->find_all();
    Cookie::set('spend_time', time());
		$this->template->content = View::factory('five/ans5');
// 		$this->template->content->enqu = $enquete;
    $this->template->content->post_url = '/'.$this->lang.'/in/ans5/'.$this->enqu_id.'/'.$this->q_num.'/ ';
    $this->template->content->qu = $question;
    $this->template->content->qucho = $qucho;
    $this->template->content->lang = $this->lang;     
  }
	public function action_permit()
	{

    $this->session = Session::instance();

    $enquete = ORM::factory('enquete')->where('id', '=', $this->enqu_id)->find();
    if (substr($enquete->passwd, 0, 8) == $this->request->param('three') OR $enquete->u_id == $this->session->get('u_id'))
    {
      if (!$this->session->get('u_id'))
      {
        $usr = new Model_Usr;
        $this->u_id = $usr->get_new_id();
        $this->session->set('u_id', $this->u_id);
      }
      Cookie::set('nextq', 1);
      Cookie::set('enqu_ans', $this->enqu_id);
      $this->request->redirect('/'.$this->lang.'/ans5/'.$this->enqu_id.'/1/ ');
    }
    else
    {
      die('you can not access this page'); 
    }
  }
}
//end