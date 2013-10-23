<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_Session extends Model {

	public static function tpl($value,$session,$view)
	{
    if ($session->get($value))
    {
      return $session->get($value);
    }
    else
    {
//       $lang = Cookie::get('lang') ?: 'ja';
//       echo Debug::vars(Cookie::get('lang'));
      I18n::lang(Cookie::get('lang'));
//       $variable_class = 'Model_Msg_'.$lang;
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = $value.__(' is no session value');
      die($view); 
    }
	}
	public static function json($value,$session)
	{
    if ($session->get($value))
    {
      return $session->get($value);
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 3;
      $res['err'] = $value.__(' is no session value');
      die(json_encode($res)); 
    }
	}
}

?>