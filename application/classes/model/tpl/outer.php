<?php defined('SYSPATH') or die('No direct script access.');
class Model_Tpl_Outer extends Model {

	public static function call()
	{
    $arr_phone = Request::user_agent(array('mobile', 'fp'));
    if ($arr_phone['mobile'])
    {
      $view = View::factory('tpl/template_sp');
      $view->device = 'sp';
    }
    elseif ($arr_phone['fp'])
    {
      $view = View::factory('tpl/template_fp');
      $view->device = 'fp';
    }
    else
    {
      $view = View::factory('tpl/template_pc');
      $view->device = 'pc';
    }
    $view->title = '';
    return $view;
	}

}

?>