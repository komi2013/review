<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Maker_New3 extends Controller {
	public function action_index()
	{
    $this->template = Model_Tpl_Outer::call();
    Model_Check_Csrf::tpl($this->template);
    $session = Session::instance('database');
    Model_Check_Session::tpl('pv_u_id',$session,$this->template);
    $enqu_cnt = ORM::factory('V1_DtEnquete')
      ->where('maker_id', '=', $session->get('maker_id'))
      ->where('status', '=', 0)
      ->count_all();

    if ($enqu_cnt > 10)
    {
      $this->template->content = View::factory('tpl/err_'.$view->device);
      $this->template->content->msg = '編集中のアンケートが10以上あります';
      die($this->template); 
    }

    $enquete = ORM::factory('V1_DtEnquete');
  	$enquete->maker_id = $session->get('maker_id');
    $enquete->end = '回答ありがとうございました';
  	$enquete->status = 0;
    $enquete->title = 'レビュー';
    $enquete->back_domain = 'https://livehouse.komahana.info/sample1/fake/';
    $enquete->present_passwd = Text::random('alnum', 15);
  	$enquete->save();
//     $this->session->set('posted', 2);
    Cookie::set('csrf',Text::random('alnum', 16));
    $this->request->redirect('/maker/reviewlist/ ');
  }
}
//end