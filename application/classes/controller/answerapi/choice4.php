<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_AnswerApi_Choice4 extends Controller {
	public function action_index()
	{
    $cho_num = Model_Check_Get::json('cho_num');
    $encry_session = Model_Check_Get::json('encry');
    $encrypt = new Model_Encrypt_Session;
    $arr_session = $encrypt->decode($encry_session);


    $u_id = $arr_session['u_id'];
    $enqu_id = $arr_session['enqu'];
    $nextq = $arr_session['nextq'];
    $question = Model_Check_Question::json($enqu_id,$nextq);

    $qucho = ORM::factory('V1_DtQucho')
      ->where('qu_id', '=', $question->id)
      ->order_by('id')
      ->find_all();
    $cho_id = 0;
    foreach ($qucho as $k => $d)
    { ++$k;
      if ($k == $cho_num) $cho_id = $d->id; 
    }

    error_reporting(E_ALL & E_NOTICE);
    $ancho = ORM::factory('V1_DtAncho');
    $ancho->qu_id = $question->id;
    $ancho->u_id = $u_id;
		$ancho->cho_id = $cho_id;
		$ancho->save();
    
    $arr_session['nextq'] = ++$nextq;
    $encrypt = new Model_Encrypt_Session;
    $encry_session = $encrypt->encode($arr_session);
    $res['encry'] = $encry_session; 
    
    $res['redirect'] = '/answerapi/ing5/';
//     $session->set('nextq',++$nextq)
    $res['chk'] = 1;
    
    die(json_encode($res));
	}
}
//end