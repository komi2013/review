<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_Post extends Model {

	public static function tpl($arg,$view)
	{
    if (isset($_POST[$arg]))
    {
      return $_POST[$arg];
    }
    else
    {
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = $arg.' の引数がありません';
      die($view); 
    }
	}

	public static function json($arg)
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

}

?>