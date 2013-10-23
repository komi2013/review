<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Test_Instgram extends Controller_Template {

  public function action_index()
  {
    $this->template = View::factory('/home/test');
//     $u_id = isset($_GET['u_id'])? $_GET['u_id'] : 'ありません' ;
//     $enqu = isset($_GET['enqu'])? $_GET['enqu'] : 'ありません' ;
//     $passwd = isset($_GET['passwd'])? $_GET['passwd'] : 'ありません' ;
//     $res['msg'] = '回答ありがとうございました。'
//       ."<br>".'u_idは'.$u_id
//       ."<br>".'enquは'.$enqu
//       ."<br>".'passwdは'.$passwd
//       ;
//       
//       
//              
//     die(json_encode($res));
	}

}
//end