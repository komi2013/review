<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_AnswerApi_End5 extends Controller {
	public function action_index()
	{
    $encry_session = Model_Check_Get::json('encry');
    $encrypt = new Model_Encrypt_Session;
    $arr_session = $encrypt->decode($encry_session);

    $enqu_id = $arr_session['enqu'];
    $u_id = $arr_session['u_id'];

    $enquete = ORM::factory('V1_DtEnquete')
      ->where('id', '=', $enqu_id)
      ->find();
    
    $third_url = $enquete->present_domain
      .'?u_id='.$u_id
      .'&enqu='.$enqu_id
      .'&present_passwd='.$enquete->present_passwd
    ;
    
    $from_third = @file_get_contents($third_url);

    $arr_res = json_decode($from_third,true);
    
    $res_msg = isset($arr_res['msg']) ? $arr_res['msg'] : $from_third;
    
    
    $res['enquete_title'] = $enquete->title;
    $res['msg'] = $res_msg;
//     echo $res_msg;
    die(json_encode($res));
    
//     $json = json_encode($res);
//     $arr_json = json_decode($json,true);
//     
//     echo Debug::vars($arr_json);
     
  }
}
//end