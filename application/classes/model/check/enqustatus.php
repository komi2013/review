<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_EnquStatus extends Model {

	public static function tpl($enqu,$view)
	{
    if ($enqu->status > 0)
    {
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = __('it is running, unable to edit');
      die($view); 
    }
    return $enqu;
	}
	public static function json($enqu)
	{
    if ($enqu->status > 0)
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 2;
      $res['err'] = __('it is running, unable to edit');
      die(json_encode($res)); 
    }
    return $enqu;
	}

}

?>