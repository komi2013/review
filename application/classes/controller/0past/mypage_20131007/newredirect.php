<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Mypage_NewIn extends Controller {
	public function action_index()
	{
    $this->session = Session::instance();
		if (!$this->session->get('pv_u_id')) die('you must login');
   	$this->lang = Cookie::get('lang');
    i18n::lang($this->lang);
    if ($this->session->get('posted') != 1) die(__('you can not send many times'));
    $u_id = $this->session->get('u_id');
    $enqu_cnt = MyORM::factory('enquete')->where('u_id', '=', $u_id)->where('status', '=', 0)->count_all();
    if ($enqu_cnt > 5) die(__('you must run your edit survey'));
    $enquete = MyORM::factory('enquete');
    $enqu_id = $this->getnextval();
    $enquete->id = $enqu_id;
  	$enquete->u_id = $u_id;
    $enquete->end_txt = __('thanks for answer');
  	$enquete->status = 0;
    $enquete->title = __('Review');
  	$enquete->create();
    $this->session->set('posted', 2);
    $this->request->redirect('/mypage/review/?enqu_id='.$enqu_id);
//     }
  }
	public function getnextval()
	{
		$sql = "select nextval('enquete_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
// 		return $newid;
	}
}
//end