<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_AnswerApi_Start5 extends Controller {
	public function action_index()
	{
    $enqu_id = Model_Check_Get::json('enqu');
    $passwd = Model_Check_Get::json('passwd');
    $u_id = Model_Check_Get::json('u_id');

//     $session = Session::instance('database');
    $enquete = ORM::factory('V1_DtEnquete')
      ->where('id', '=', $enqu_id)
      ->find();
    
    if (substr($enquete->passwd, 0, 8) == $_GET['passwd'])
    {
      $arr_session['u_id'] = $u_id;
      $arr_session['nextq'] = 1;
      $arr_session['enqu'] = $enqu_id;
      $encrypt = new Model_Encrypt_Session;
      $encry_session = $encrypt->encode($arr_session);
      $res['chk'] = 1;
      $res['encry'] = $encry_session; 
    }
    else
    {
      $res['chk'] = 2;
      $res['err'] = 'アンケートパスワードが違います';
//       $res['err'] = 'password is wrong';
    }
    die(json_encode($res));
	}
}
//end