<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_Question extends Model {

	public static function json($enqu_id,$currentq)
	{
		$question = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->where('number', '=', $currentq)
      ->find();
    if ($question->loaded())
    {
      return $question;
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 2;
      $res['err'] = $enqu_id.' '.$currentq.__(' is wrong');
      die(json_encode($res));
    }

	}
	public static function tpl($enqu_id,$currentq,$view)
	{
		$question = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->where('number', '=', $currentq)
      ->find();
    if ($question->loaded())
    {
      return $question;
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = $enqu_id.' '.$currentq.__(' is wrong');
      die($view); 
    }
	}

}

?>