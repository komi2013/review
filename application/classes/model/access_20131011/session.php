<?php defined('SYSPATH') or die('No direct script access.');
class Model_Access_Session extends Model {

	public static function maker_chk()
	{
    $session = Session::instance('database');
    if (!$session->get('pv_u_id'))
    {
      $view = Model_Tpl_Outer::call();
      $view->title = 'アクセスエラー';
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = 'このページのアクセス権がありません。';
      die($view); 
    }
	}

	public static function maker_chk_json()
	{
    $session = Session::instance('database');
    if (!$session->get('pv_u_id'))
    {
      $res['chk'] = 3;
      $res['err'] = 'アクセスエラー';
      die(json_encode($res)); 
    }
	}

	public static function usr_chk()
	{
    $session = Session::instance('database');
//     echo Debug::vars($session);
    if ($session->get('u_id'))
    {
      return $session;
    }
    else
    {
      $view = Model_Tpl_Outer::call();
      $view->title = 'アクセスエラー';
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = 'このページのアクセス権がありません。';
      die($view); 
    }
	}

	public static function end_qu_chk($session)
	{
    if ($session->get('nextq') != 'end')
    {
      $view = Model_Tpl_Outer::call();
      $view->title = 'nextq err';
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = '最後まで答えてください';
      die($view); 
    }
	}

	public static function check($session,$value)
	{
    if ($session->get($value) != 'end')
    {
      $view = Model_Tpl_Outer::call();
      $view->title = 'nextq err';
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = '最後まで答えてください';
      die($view); 
    }
	}

}

?>