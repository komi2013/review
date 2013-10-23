<?php defined('SYSPATH') or die('No direct script access.');
class Model_Access_Arg extends Model {

	public static function get_chk($arg)
	{
    if (isset($_GET[$arg]))
    {
      return $_GET[$arg];
    }
    else
    {
      $view = Model_Tpl_Outer::call();
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = $arg.' の引数がありません';
      die($view); 
    }
	}

	public static function post_chk_json($arg)
	{
    if (isset($_POST[$arg]))
    {
      return $_POST[$arg];
    }
    else
    {
      $res['chk'] = 2;
      $res['err'] = $arg.' の引数がありません';
      die(json_encode($res)); 
    }
	}

	public static function get_csrf_chk()
	{
    if (!isset($_GET['csrf']))
    {
      $res['chk'] = 2;
      $res['err'] = 'CSRF 引数エラー';
      die(json_encode($res)); 
      $tail = Model_Tpl_Device::file_tail();
      $template = View::factory('tpl/template_'.$tail);
      $template->title = 'CSRF 引数エラー';
      $template->content = View::factory('tpl/err_'.$tail);
      $template->content->msg = 'CSRF 引数がありません';
      die($template); 
    }
    if (Cookie::get('csrf') != $_GET['csrf'])
    {
      $tail = Model_Tpl_Device::file_tail();
      $template = View::factory('tpl/template_'.$tail);
      $template->title = 'CSRFエラー';
      $template->content = View::factory('tpl/err_'.$tail);
      $template->content->msg = 'CSRFが正しくありません';
      die($template); 
    }
	}

	public static function post_csrf_chk_json()
	{
    if (!isset($_POST['csrf']))
    {
      $res['chk'] = 2;
      $res['err'] = 'CSRF 引数がありません';
      die(json_encode($res)); 
    }
    if (Cookie::get('csrf') != $_POST['csrf'])
    {
      $res['chk'] = 2;
      $res['err'] = 'CSRF エラー';
      die(json_encode($res)); 
    }
	}

	public static function get_chk_json($arg)
	{
    if (isset($_GET[$arg]))
    {
      return $_GET[$arg];
    }
    else
    {
      $res['chk'] = 2;
      $res['err'] = $arg.' の引数がありません';
      die(json_encode($res)); 
    }
	}

}

?>