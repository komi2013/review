<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_Csrf extends Model {

	public static function tpl($view)
	{
    if (!isset($_GET['csrf']))
    {
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = 'CSRF'.__(' is no argument');
      die($view); 
    }
    if ($_GET['csrf'] != Cookie::get('csrf'))
    {
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = 'CSRF'.__(' is wrong');
      die($view); 
    }
	}

	public static function json()
	{
    if (!isset($_GET['csrf']))
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 4;
      $res['err'] = 'CSRF'.__(' is no argument');
      die(json_encode($res));
    }
    if ($_GET['csrf'] != Cookie::get('csrf'))
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 5;
      $res['err'] = 'CSRF'.__(' is wrong');
      die(json_encode($res));
    }
  }
// 	public static function json()
// 	{
//     if (!isset($_POST['csrf']))
//     {
//       $res['chk'] = 4;
//       $res['csrf_err'] = 'CSRFの引数がありません';
//       die(json_encode($res));
//     }
//     if ($_POST['csrf'] != Cookie::get('csrf'))
//     {
//       $res['chk'] = 5;
//       $res['csrf_err'] = 'CSRFが一致しません';
//       die(json_encode($res));
//     }
//   }

}

?>