<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Answer_End extends Controller_Template {
	public function action_index()
	{
    $this->template = Model_Tpl_Answer::call();
    $session = Session::instance('database');
    $u_id = Model_Check_Session::tpl('u_id',$session,$this->template);
    $enqu_id = Model_Check_Session::json('enqu',$session);
    $currentq = Model_Check_Session::json('nextq',$session);

    if ($currentq != 'end')
    {
      $this->template->content = View::factory('tpl/err_'.$this->template->device);
      $this->template->content->msg = '最後まで答えてください';
      die($this->template); 
    }
    $enquete = ORM::factory('V1_DtEnquete')
      ->where('id', '=', $enqu_id)
      ->find();
      
    $third_url = $enquete->present_domain
      .'?u_id='.$u_id
      .'&enqu='.$enqu_id
      .'&present_passwd='.$enquete->present_passwd
    ;
    
    $from_third = @file_get_contents($third_url);

    $arr_res = json_decode($from_third,true);
    
    $res_msg = isset($arr_res['msg']) ? $arr_res['msg'] : '通信エラー！もう一度リロードしてください。';
      
    $this->template->content = View::factory('answer/end_'.$this->template->device);
    $this->template->content->enquete = $enquete;
    $this->template->content->res_msg = $res_msg;
    $this->template->title = $enquete->title;
  }
}
//end