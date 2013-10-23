<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_AnswerApi_Txt4 extends Controller {
	public function action_index()
	{
    $txt = Model_Check_Get::json('txt');

//     $txt = Model_Access_Arg::post_chk_json('txt');
//     $encry_session = Model_Access_Arg::post_chk_json('encry_session');
//     $encrypt = new Model_Encrypt_Session;
//     $arr_session = $encrypt->decode($encry_session);

    $encry_session = Model_Check_Get::json('encry');
    $encrypt = new Model_Encrypt_Session;
    $arr_session = $encrypt->decode($encry_session);

    $u_id = $arr_session['u_id'];
    $enqu_id = $arr_session['enqu'];
    $nextq = $arr_session['nextq'];

    $question = Model_Check_Question::json($enqu_id,$nextq);

    $res['chk'] = 1;
		try
  	{
      $antxt = ORM::factory('V1_DtAntxt');
      $antxt->qu_id = $question->id;
      $antxt->u_id = $u_id;
  		$antxt->txt = $txt;
  		$antxt->save();

      $arr_session['nextq'] = ++$nextq;
      $encrypt = new Model_Encrypt_Session;
      $encry_session = $encrypt->encode($arr_session);
      $res['encry'] = $encry_session; 
      die(json_encode($res));
    }
		catch (ORM_Validation_Exception $e)
		{
			$message = $e->errors('ja',TRUE,'valid');
      foreach ($message as $k => $d)
      {
//           $res[$k] = $d;
          $res['err'] = preg_replace("/txt/",'テキスト',$d);
          ++$res['chk'];
      }
      die(json_encode($res));
		}
//     $arr_session['nextq'] = 'end';
//     $encry_session = $encrypt->encode($arr_session);
//     $res['encry_session'] = $encry_session; 
//     die(json_encode($res));
	}
}
//end