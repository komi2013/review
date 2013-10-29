<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_AnswerApi_Ing5 extends Controller {
	public function action_index()
	{
    $encry_session = Model_Check_Get::json('encry');
//     $encry_session = Model_Access_Arg::get_chk_json('encry_session');

    $encrypt = new Model_Encrypt_Session;
    $arr_session = $encrypt->decode($encry_session);

    $end_chk_qu = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $arr_session['enqu'])
      ->order_by('number','asc')
      ->find_all();
    $nextq = $arr_session['nextq'];
    $chk_nextq = 1;
    foreach ($end_chk_qu as $k => $d)
    {
//       echo $d->number.' == '.$nextq;
      if ($d->number == $nextq)
      {
        $question = $d;
        $chk_nextq = 2;
      }
      $end_q_num = $d->number; 
    }
    if ($chk_nextq == 1 AND $end_q_num == $nextq -1)
    {
      $arr_session['nextq'] = $res['q_num'] = 'end';
      $encrypt = new Model_Encrypt_Session;
      $encry_session = $encrypt->encode($arr_session);
      $res['encry'] = $encry_session; 
      $res['redirect'] = '/answerapi/end5/';
      die(json_encode($res));
    }
    if ($question->type == 1)
    {
      error_reporting(E_ALL & E_NOTICE);
      $ancho = ORM::factory('V1_DtAncho')
        ->where('qu_id', '=', $question->id)
        ->where('u_id', '=', $arr_session['u_id'])
        ->find();
      if ($ancho->loaded())
      {
        $arr_session['nextq'] = $res['q_num'] = $nextq +1;
        $encrypt = new Model_Encrypt_Session;
        $encry_session = $encrypt->encode($arr_session);
        $res['encry'] = $encry_session;
        $res['redirect'] = '/answerapi/ing5/'; 
        die(json_encode($res));
      }
      $qucho = ORM::factory('V1_DtQucho')
        ->where('qu_id', '=', $question->id)
        ->order_by('qu_id','asc')
        ->find_all();
      $res['question_txt'] = H::c($question->txt);
//       foreach ($question as $d)
//       {
//         $res['question_txt'] = H::t($question->txt);
//       }
      foreach ($qucho as $k => $d)
      { ++$k;
        $res['choice_txt'][$k] = H::c($d->txt);
      }
      $res['get'] = '/answerapi/choice4/'; 
    }
    elseif ($question->type == 5)
    {
      $antxt = ORM::factory('V1_DtAntxt')
        ->where('qu_id', '=', $question->id)
        ->where('u_id', '=', $arr_session['u_id'])
        ->find();
      if ($antxt->loaded())
      {
        $arr_session['nextq'] = $res['q_num'] = $nextq +1;
        $encrypt = new Model_Encrypt_Session;
        $encry_session = $encrypt->encode($arr_session);
        $res['encry'] = $encry_session;
        $res['redirect'] = '/answerapi/ing5/'; 
        die(json_encode($res));
      }
      $res['question_txt'] = H::c($question->txt);
//       foreach ($question as $d)
//       {
//         $res['question_txt'] = H::t($d->txt);
//       }
      $res['get'] = '/answerapi/txt4/';
    }
//     $arr_session['spend_time'] = time();
    $encrypt = new Model_Encrypt_Session;
    $encry_session = $encrypt->encode($arr_session);
    $res['encry'] = $encry_session;
//     $res['redirect'] = '/answerapi/ing5/'; 
    die(json_encode($res));
	}
}
//end