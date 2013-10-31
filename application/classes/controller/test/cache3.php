<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Test_Cache3 extends Controller_Template {

  public function action_index()
  {
//     Cache::instance('file')->set('foo', 'foo_data');
//     $cache_res = Cache::instance('file')->get('foo');
//     echo $cache_res;

    $this->template = View::factory('/tpl/template_cache');
    $this->template->title = 'cache';
    $this->template->content = 'cache';
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