<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Test_Cache extends Controller_Template {

  public function action_index()
  {
//     Cache::instance('apc')->set('apc_test', 'apc test');
    $cache_res = Cache::instance('apc')->get('enqu3');
    Cache::instance('apc')->delete_all();
//     $enquete = ORM::factory('V1_DtEnquete')
// //       ->where('maker_id', '=', $maker_id)
//       ->order_by('id','DESC')
// //       ->limit('10')
// //       ->offset(($page -1) * 10)
//       ->find_all();
// 
//     $enqu_arr = array();
//     foreach ($enquete as $k => $d)
//     {
// //       $enqu_arr[$d->id]['title'] = $d->title;
// //       $enqu_arr[$d->id]['status'] = $d->status;
// //       $enqu_arr[$d->id]['passwd'] = substr($d->passwd, 0, 8);
// //       $enqu_arr[$d->id]['passwd_end'] = substr($d->passwd, 4);
//       $enqu_arr[] = $d;
// //       Cache::instance('apc')->set($k.'enqu', 'apc test');
//     }
//     Cache::instance('apc')->set('enqu4', $enqu_arr);
// 
//     $i = 0;
//     while ($i < 1000)
//     {
//       Cache::instance('apc')->set('enqu'.$i, $enqu_arr);
//       ++$i;
//     }
// 
    echo 'deleted';
    echo Debug::vars($cache_res);

//     $this->template = View::factory('home/test');
//     $this->template->title = 'cache';
//     $this->template->content = 'cache';
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