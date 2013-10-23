<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_ChoiceNum extends Model {

	public static function json($cho_num)
	{
    if ($cho_num > 0 AND $cho_num < 6)
    {
      return $cho_num;
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 2;
      $res['err'] = $cho_num.__(' is wrong');
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
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = $cho_num.__(' is wrong');
      die($view); 
    }
	}
	public static function arr($cho_num)
	{
    if ($cho_num > 0 AND $cho_num < 6)
    {
      $res['chk'] = 1;
//       $res['err'] = '選択番号が不正です';
//       return $cho_num;
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 2;
      $res['err'] = $cho_num.__(' is wrong');
    }
    return $res;
	}

}

?>