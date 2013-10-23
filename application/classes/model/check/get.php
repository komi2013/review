<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_Get extends Model {

	public static function tpl($arg,$view)
	{
    if (isset($_GET[$arg]))
    {
      return $_GET[$arg];
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = $arg.__(' is no argument');
      die($view); 
    }
	}

	public static function json($arg)
	{
    if (isset($_GET[$arg]))
    {
      return $_GET[$arg];
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 2;
      $res['err'] = $arg.__(' is no argument');
      die(json_encode($res)); 
    }
	}

}

?>