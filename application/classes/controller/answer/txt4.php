<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Answer_Txt4 extends Controller {
	public function action_index()
	{
    Model_Check_Csrf::json();
    $txt = Model_Check_Get::json('txt');
    $session = Session::instance('database');
    $u_id = Model_Check_Session::json('u_id',$session);
    $enqu_id = Model_Check_Session::json('enqu',$session);
    $nextq = Model_Check_Session::json('nextq',$session);
    $question = Model_Check_Question::json($enqu_id,$nextq);
    $res['chk'] = 1;
		try
  	{
      $antxt = ORM::factory('V1_DtAntxt');
      $antxt->qu_id = $question->id;
      $antxt->u_id = $u_id;
  		$antxt->txt = $txt;
  		$antxt->save();
      $session->set('nextq','end');
      die(json_encode($res));
    }
		catch (ORM_Validation_Exception $e)
		{
			$message = $e->errors('ja',TRUE,'valid');
      foreach ($message as $k => $d)
      {
          $res['err'] = preg_replace("/txt/",'テキスト',$d);
          ++$res['chk'];
      }
      die(json_encode($res));
		}
	}
}
//end