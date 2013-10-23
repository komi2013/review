<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Maker_Freetxt4 extends Controller {
	public function action_index()
	{
    $enqu_id = Model_Check_Get::json('enqu');
    Model_Check_Csrf::json();
    $session = Session::instance('database');
    Model_Check_Session::json('pv_u_id',$session);
    $enquete = Model_Check_Enquete::json($enqu_id,$session);
    $enquete = Model_Check_EnquStatus::json($enquete);
    $res['chk'] = 1; // 1 is no error

		$question = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->where('number', '=', 5)
      ->find();
    $qu_id = ($question->loaded())? $question->id : $question->get_new_id();
		try
  	{
      $question->id = $qu_id;
  		$question->txt = $_GET['q_txt'];
  		$question->enqu_id = $enqu_id;
      $question->type = 5;
  		$question->number = 5;
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
    die(json_encode($res));
	}
}
//end