<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Review extends Controller {
	public function action_index()
	{
    $this->session = Session::instance();
		if (!$this->session->get('pv_u_id')) die('you must login');
    $this->u_id = $this->session->get('u_id');
    $this->enqu_id = $this->request->param('one');
   	$this->lang = $this->request->param('lang');
		$this->q_num = $this->request->param('two');
    i18n::lang($this->lang);
//     if ($this->enqu_id == 'new') $this->enqu_id = 0;
    $enquete = ORM::factory('enquete')->where('id', '=', $this->enqu_id)->find();
    if (!$enquete->loaded()) die('no question on this page');
    if ($enquete->loaded() AND $enquete->u_id != $this->u_id) die('you can not access this page');
    $db = Database::instance();
    $db->begin();
		$this->message = array();
    $error['chk'] = 1; // 1 is no error
		$question = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->where('q_num', '=', $_POST['q_num'])->find();
    $p_qu_id = ($question->loaded())? $question->id : $question->getnextval();
		try
  	{
      $question->id = $p_qu_id;
  		$question->q_txt = $_POST['q_txt'];
  		$question->enqu_id = $this->enqu_id;
      $question->qtype = 1;
  		$question->q_num = $_POST['q_num'];
      $question->limit_ans = 10000;
      $question->q_pt = 0;
   		$question->save();
    }
		catch (ORM_Validation_Exception $e)
		{
			$this->message = $e->errors($this->lang);
		}
    $this->err['chk'] = 1;
    $txt = '';
//     $pre_txt = '';
    foreach ($_POST['choice'] as $k => $d)
    { ++$k;
      $this->err['cho_'.$k] = '';
      if (UTF8::strlen($d) > 20)
      {
        $this->err['cho_'.$k] .= __('choice must not be more than 20 character');
        ++$this->err['chk'];
      }
      elseif (UTF8::strlen($d) == 0)
      {
        $this->err['cho_'.$k] .= __('choice must not be empty');
        ++$this->err['chk'];
      }
//       elseif ($d == $pre_txt)
//       {
//         $this->err['cho_'.$k] .= __('text must be unique');
//         ++$this->err['chk'];
//       }
//       $pre_txt = $d;
      $txt .= $d."\n";
    }
    $res = $this->err_msg();
    if ($this->err['chk'] == 1)
    {
      $qucho = new Model_Qucho;
      $qucho->deladd($txt,$p_qu_id);
      $db->commit();
      Cookie::set('posted', 2);
      echo $res;
    }
    else
    {
      $db->rollback();
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