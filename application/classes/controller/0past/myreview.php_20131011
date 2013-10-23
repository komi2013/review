<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_MyReview extends Controller_All {
	public function action_index()
	{
    parent::all();
		if (!$this->session->get('pv_u_id')) die('you must login');
    $this->u_id = $this->session->get('u_id');
    $this->page_title = __('My Review');
    $pager = $this->enqu_id * 10;
    $enquete = ORM::factory('enquete')->where('u_id', '=', $this->u_id)
        ->order_by('id','DESC')->limit('10')->offset($pager)->find_all();

    $enqu_arr = array();
    foreach ($enquete as $k => $d)
    {
      $enqu_arr[$d->id]['title'] = $d->title;
      $enqu_arr[$d->id]['status'] = $d->status;
      $enqu_arr[$d->id]['passwd'] = substr($d->passwd, 0, 8);
      $enqu_arr[$d->id]['passwd_end'] = substr($d->passwd, 4);
    }
		$this->template->content = View::factory('five/my_review');
    $this->template->content->pre_url = '/'.$this->lang.'/review/'.$this->enqu_id.'/0/ ';
    $this->page_title = __('My Review');
    $enquete = ORM::factory('enquete')->where('u_id', '=', $this->u_id)->count_all();
    $this->template->content->pager_end = floor($enquete / 10);
		$this->template->content->enqu = $enqu_arr;

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