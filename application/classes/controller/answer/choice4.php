<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Answer_Choice4 extends Controller {
	public function action_index()
	{
    Model_Check_Csrf::json();
    $cho_num = Model_Check_Get::json('cho_num');
    $session = Session::instance('database');
    $u_id = Model_Check_Session::json('u_id',$session);
    $enqu_id = Model_Check_Session::json('enqu',$session);
    $currentq = Model_Check_Session::json('nextq',$session);
    $question = Model_Check_Question::json($enqu_id,$currentq);
    $cho_id = Model_Check_ChoiceId::json($cho_num,$question->id);

    error_reporting(E_ALL & E_NOTICE);
    $ancho = ORM::factory('V1_DtAncho');
    $ancho->qu_id = $question->id;
    $ancho->u_id = $u_id;
		$ancho->cho_id = $cho_id;
		$ancho->save();
    $session->set('nextq',++$currentq);
    $res['chk'] = 1;
    die(json_encode($res));
	}
}
//end