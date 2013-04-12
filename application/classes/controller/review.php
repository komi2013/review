<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Review extends Controller_All {
	public function action_index()
	{
    parent::all();
		if (!$this->session->get('pv_u_id')) die('you must login');
    $this->u_id = $this->session->get('u_id');
    $this->page_title = __('My Review');
    if (!preg_match("/^[0-9]+$/", $this->enqu_id)) die('hey! what are you trying to do? no string');
    $enquete = ORM::factory('enquete')->where('id', '=', $this->enqu_id)->find();
    if (!$enquete->loaded()) die('no survey on this page');
    if ($enquete->u_id != $this->u_id) die('you can not access this page');
    if ($enquete->status > 0) die('you can not edit this page');

    $this->page_title = $enquete->title;
		$question = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->order_by('q_num')->find_all();  
    $this->qu_arr = array();
    $this->correct = array(0,0);
    $this->qu_disp = array();
    $this->k_num = 1;
    foreach ($question as $k => $d)
    {
      if ($this->k_num != $d->q_num)
      {
        $this->blank_question($d->q_num);
      }
      $this->qu_disp[$d->q_num]['none'] = 'qu_disp_is';
      $this->qu_arr[$d->q_num] = $d->q_txt;
      $qucho = ORM::factory('qucho')->where('p_qu_id', '=', $d->id)->order_by('id')->find_all();
      $blank_cho = 0;
      foreach ($qucho as $k => $dd)
      {
        $this->cho_arr[$d->q_num][] = $dd->txt;
        if ($dd->score == 1) $this->correct[$d->q_num] = $k+1;
        ++$blank_cho;  
      }
      if ($blank_cho == 0)
      {
        $this->cho_arr[$d->q_num] = array(__('very bad'),__('bad'),__('ok'),__('good'),__('very good'));
      }
      ++$this->k_num;
    }
    $this->blank_question(6);
    
		$this->template->content = View::factory('five/review');
		$this->template->content->enqu = $enquete;
    $this->template->content->cho_arr = $this->cho_arr;
    $this->template->content->qu_arr = $this->qu_arr;
    $this->template->content->qu_disp = $this->qu_disp;
    $this->template->content->lang = $this->lang;
	}
  public function blank_question($d_q_num)
  {
    while ($this->k_num < $d_q_num)
    {
      $this->qu_disp[$this->k_num]['none'] = ($this->k_num == 1)? 'qu_disp_is' : 'qu_disp_none';
      $this->qu_arr[$this->k_num] = __('question').' '.$this->k_num;
      if ($this->k_num != 5) $this->cho_arr[$this->k_num] = array(__('very bad'),__('bad'),__('ok'),__('good'),__('very good'));
      ++$this->k_num;
    }
  }
}
//end