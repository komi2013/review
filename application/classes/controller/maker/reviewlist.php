<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Maker_ReviewList extends Controller_Template
{
	public function action_index()
	{
    $this->template = Model_Tpl_Outer::call();
    $session = Session::instance('database');
    Model_Check_Session::tpl('pv_u_id',$session,$this->template);
    $maker_id = $session->get('maker_id');
    $page = isset($_GET['page'])? $_GET['page'] : 1 ;
    $enquete = ORM::factory('V1_DtEnquete')
      ->where('maker_id', '=', $maker_id)
      ->order_by('id','DESC')
      ->limit('10')
      ->offset(($page -1) * 10)
      ->find_all();

    $enqu_arr = array();
    foreach ($enquete as $k => $d)
    {
      $enqu_arr[$d->id]['title'] = $d->title;
      $enqu_arr[$d->id]['status'] = $d->status;
      $enqu_arr[$d->id]['passwd'] = substr($d->passwd, 0, 8);
      $enqu_arr[$d->id]['passwd_end'] = substr($d->passwd, 4);
    }
    
		$this->template->content = View::factory('maker/review_list');
    $this->template->title = 'マイレビュー';
    $enquete_cnt = ORM::factory('V1_DtEnquete')
      ->where('maker_id', '=', $maker_id)
      ->count_all();
    $this->template->content->next_page = ++$page;
    $this->template->content->page_end = floor($enquete_cnt / 10);
		$this->template->content->enqu = $enqu_arr;
	}

}
