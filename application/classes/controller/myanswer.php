<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_MyAnswer extends Controller_All {
	public function action_index()
	{
    parent::all();
    if (!$this->session->get('pv_u_id')) die('you must login');
    $this->u_id = $this->session->get('u_id');
    $this->lang = $this->request->param('lang');

    $pager = $this->enqu_id * 10;
    $sm_endans = ORM::factory('smEndans')->where('u_id', '=', $this->u_id)
        ->order_by('id','DESC')->limit('10')->offset($pager)->find_all();
    
    $ans_arr = array();
    foreach ($sm_endans as $k => $d)
    {
      $enquete = ORM::factory('enquete')->where('id', '=', $d->enqu_id)->find();
      $ans_arr[$k]['url'] = '/'.$this->lang.'/end5/'.$enquete->id.'/';
      $ans_arr[$k]['title'] = $enquete->title;
    }

		$this->template->content = View::factory('five/my_answer');
		$this->template->content->ans_arr = $ans_arr;
    $enquete = ORM::factory('enquete')->where('u_id', '=', $this->u_id)->count_all();
    $this->template->content->pager_end = floor($enquete / 10);
    
	}
}
//end