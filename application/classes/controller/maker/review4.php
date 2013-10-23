<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Maker_Review4 extends Controller {
	public function action_index()
	{
    $enqu_id = Model_Check_Get::json('enqu');
    Model_Check_Csrf::json();
    $session = Session::instance('database');
    Model_Check_Session::json('pv_u_id',$session);
    $enquete = Model_Check_Enquete::json($enqu_id,$session);
    Model_Check_EnquStatus::json($enquete);
    $res['chk'] = 1; // 1 is no error
		$question = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->where('number', '=', $_GET['q_num'])
      ->find();
    $qu_id = ($question->loaded())? $question->id : $question->get_new_id();
    $db = Database::instance();
    $db->begin();
		try
  	{
      $question->id = $qu_id;
  		$question->txt = $_GET['q_txt'];
  		$question->enqu_id = $enqu_id;
      $question->type = 1;
  		$question->number = $_GET['q_num'];
      $question->limit_ans = 10000;
      $question->point = 0;
   		$question->save();
    }
		catch (ORM_Validation_Exception $e)
		{
			$message = $e->errors('ja',TRUE,'valid');
      foreach ($message as $k => $d)
      {
        $res[$k] = preg_replace("/txt/",'テキスト',$d);
        ++$res['chk'];
      }
		}
    $limit_char = 20;
    foreach ($_GET['choice'] as $k => $d)
    { ++$k;
      $res['cho_'.$k] = '';
      if (UTF8::strlen($d) > $limit_char)
      {
        $res['cho_'.$k] .= $limit_char.'文字以上は入力できません';
        ++$res['chk'];
      }
      elseif (UTF8::strlen($d) == 0)
      {
        $res['cho_'.$k] .= '空です';
        ++$res['chk'];
      }
    }
    if ($res['chk'] == 1)
    {
      $qucho = new Model_V1_DtQucho;
      $qucho->deladd($_GET['choice'],$qu_id);
      $db->commit();
      $csrf = Text::random('alnum', 16);
      Cookie::set('csrf',$csrf);
      $res['csrf_renew'] = $csrf;
    }
    else
    {
      $db->rollback();
    }
    die(json_encode($res)); 
	}
}
//end