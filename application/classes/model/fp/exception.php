<?php defined('SYSPATH') or die('No direct script access.');
class Model_Fp_Exception extends Kohana_User_Exception {

	public static function json($cho_num,$view)
	{
    if ($cho_num > 0 AND $cho_num < 6)
    {
      return $cho_num;
    }
    else
    {
      $res['chk'] = 2;
      $res['err'] = '選択番号が不正です';
      die(json_encode($res));
    }
	}
	public static function tpl($cho_num,$view)
	{
    if ($cho_num > 0 AND $cho_num < 6)
    {
      return $cho_num;
    }
    else
    {
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = '選択番号が不正です';
      die($view); 
    }
	}

}

?>