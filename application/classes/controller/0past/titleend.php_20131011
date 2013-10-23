<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_TitleEnd extends Controller_All {

	public function action_index()
	{
    parent::all();
		if (!$this->session->get('pv_u_id')) die('you must login');
    $this->u_id = $this->session->get('u_id');

    $enqu = ORM::factory('enquete')->where('id', '=', $this->enqu_id)->where('u_id', '=', $this->u_id)->find();
    if (!$enqu->loaded()) die('you can not access this page'); 
    
//     $quiz = ORM::factory('quiz')->where('enqu_id', '=', $this->enqu_id)->find();
		
    $this->template->content = View::factory('five/title_end');
    $this->template->content->enqu = $enqu;
//     $this->template->content->quiz = $quiz;
//     $this->template->content->my_list = 'quiz';
    $this->template->content->pre_url = '/'.$this->lang.'/ans5/'.$this->enqu_id.'/0/ ';;
    $this->template->content->lang = $this->lang;
	}
}
//end