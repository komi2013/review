<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Mypage_Answer extends Controller_All {
	public function action_index()
	{
    parent::all();
    if (!$this->session->get('pv_u_id')) die('you must login');
    $this->u_id = $this->session->get('u_id');
    $this->lang = Cookie::get('lang');

    $page = isset($_GET['page']) ? $_GET['page'] : 0;
    $sm_endans = MyORM::factory('sm_endans')->where('u_id', '=', $this->u_id)
        ->order_by('id','DESC')->limit('10')->offset($page)->find_all();
    
    $ans_arr = array();
    foreach ($sm_endans as $k => $d)
    {
      $enquete = MyORM::factory('enquete')->where('id', '=', $d->enqu_id)->find();
      $ans_arr[$k]['url'] = '/answer/end/?enqu_id='.$enquete->id;
      $ans_arr[$k]['title'] = $enquete->title;
    }

		$this->template->content = View::factory('mypage/answer');
		$this->template->content->ans_arr = $ans_arr;
    $enqu_cnt = MyORM::factory('enquete')->where('u_id', '=', $this->u_id)->count_all();
    $this->template->content->page_end = floor($enqu_cnt / 10);
    $this->template->content->page = ++$page;
    
	}
}
//end