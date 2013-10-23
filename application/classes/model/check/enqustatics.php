<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_EnquStatics extends Model {

	public static function tpl($enqu,$view)
	{
    if ($enqu->status < 1)
    {
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = __('still not delivery yet');
      die($view); 
    }
    return $enqu;
	}
}

?>