<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Mypage_QtxtIn extends Controller {
	public function action_index()
	{
    $this->session = Session::instance();
		if (!$this->session->get('pv_u_id')) die('you must login');
// 		if ($this->session->get('posted') != 1) die('you can not send many times');
    $this->u_id = $this->session->get('u_id');
   	$this->lang = Cookie::get('lang');
    if (isset($_POST['enqu_id']))
    {
      $this->enqu_id = $_POST['enqu_id']);
    }
    else
    {
      die('no enqu_id arg');
    }
// 		$this->q_num = $this->request->param('two');
    $enquete = MyORM::factory('enquete')->where('id', '=', $this->enqu_id)->find();
    if (!$enquete->loaded()) die('no question on this page');
    if ($enquete->loaded() AND $enquete->u_id != $this->u_id) die('you can not post this page');
		$this->message = array();
    $this->err['chk'] = 1; // 1 is no error
		$question = MyORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->where('q_num', '=', 5)->find();
    $p_qu_id = ($question->loaded())? $question->id : $this->getnextval();

    $valid = Validation::factory($_POST);
  	$valid
  	->rule('q_txt', 'not_empty')
  	->rule('q_txt', 'max_length', array(':value', '30'))
  	;
      
   	if (!$valid->check())
    {
  		$results = $valid->errors($this->lang);
      foreach ($results as $k => $d)
      {
        ++$this->err[$k]['chk'];
        $this->err[$k]['message'] = $d."\n";
      }
    }
  	if ($err['chk'] == 1)
    {
      $question->id = $p_qu_id;
  		$question->q_txt = $_POST['q_txt'];
  		$question->enqu_id = $this->enqu_id;
      $question->qtype = 5;
  		$question->q_num = 5;
      $question->limit_ans = 10000;
      $question->q_pt = 0;
   		$question->save();
      $this->session->set('posted', 2);
    }
    $res = json_encode($this->err);
    echo $res;
//     $res = $this->res_msg();
//     if ($this->err['chk'] == 1)
//     {
//       $this->session->set('posted', 2);
// //       echo $res;
//     }
	}
	public function res_msg()
	{
    foreach ($this->err['message'] as $k => $d)
    {
        $this->err[$k] = preg_replace("/q_txt/",__('question'),$d);
        ++$this->err['chk'];
    }
    return json_encode($this->err);
  }
	public function getnextval()
	{
		$sql = "select nextval('question_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
// 		return $newid;
	}

}
//end