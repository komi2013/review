<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_New extends Controller {
	public function action_index()
	{
    $this->session = Session::instance();
		if (!$this->session->get('pv_u_id')) die('you must login');
   	$this->lang = $this->request->param('lang');
    i18n::lang($this->lang);
    if ($this->session->get('posted') != 1) die(__('you can not send many times'));
    $this->u_id = $this->session->get('u_id');
    $enqu_cnt = ORM::factory('enquete')->where('u_id', '=', $this->u_id)->where('status', '=', 0)->count_all();
    if ($enqu_cnt > 5) die(__('you must run your edit survey'));
    $enquete = ORM::factory('enquete');
    $this->enqu_id = ORM::factory('enquete')->getnextval();
    $enquete->id = $this->enqu_id;
  	$enquete->u_id = $this->u_id;
    $enquete->end_txt = __('thanks for answer');
  	$enquete->status = 0;
    $enquete->title = __('Review');
  	$enquete->save();
    $this->session->set('posted', 2);
    $this->request->redirect('/'.$this->lang.'/review/'.$this->enqu_id.'/ ');
//     }
  }
}
//end