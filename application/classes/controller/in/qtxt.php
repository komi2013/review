<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Qtxt extends Controller {
	public function action_index()
	{
    $this->session = Session::instance();
		if (!$this->session->get('pv_u_id')) die('you must login');
// 		if ($this->session->get('posted') != 1) die('you can not send many times');
    $this->u_id = $this->session->get('u_id');
   	$this->lang = $this->request->param('lang');
    $this->enqu_id = $this->request->param('one');
		$this->q_num = $this->request->param('two');
    $enquete = ORM::factory('enquete')->where('id', '=', $this->enqu_id)->find();
    if (!$enquete->loaded()) die('no question on this page');
    if ($enquete->loaded() AND $enquete->u_id != $this->u_id) die('you can not post this page');
		$this->message = array();
    $this->err['chk'] = 1; // 1 is no error
		$question = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->where('q_num', '=', 5)->find();
    $p_qu_id = ($question->loaded())? $question->id : $question->getnextval();
		try
  	{
      $question->id = $p_qu_id;
  		$question->q_txt = $_POST['q_txt'];
  		$question->enqu_id = $this->enqu_id;
      $question->qtype = 5;
  		$question->q_num = 5;
      $question->limit_ans = 10000;
      $question->q_pt = 0;
   		$question->save();
    }
		catch (ORM_Validation_Exception $e)
		{
			$this->message = $e->errors($this->lang);
		}
    $res = $this->err_msg();
    if ($this->err['chk'] != 1)
    {
//       $this->session->set('posted', 2);
      echo $res;
    }
    else
    {
      echo $res;
    }
	}
	public function err_msg()
	{
    foreach ($this->message as $k => $d)
    {
        $this->err[$k] = preg_replace("/q_txt/",__('question'),$d);
        ++$this->err['chk'];
    }
    return json_encode($this->err);
  }
}
//end