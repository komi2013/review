<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_ChoiceId extends Model {

	public static function json($cho_num,$question_id)
	{
    $qucho = ORM::factory('V1_DtQucho')
      ->where('qu_id', '=', $question_id)
      ->order_by('id')
      ->find_all();
//     $cho_id = 0;
    foreach ($qucho as $k => $d)
    { ++$k;
      if ($k == $cho_num) $cho_id = $d->id; 
    }
    
    if (isset($cho_id))
    {
      return $cho_id;
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 2;
      $res['err'] = $cho_num.__(' is wrong');
      die(json_encode($res));
    }
	}
	public static function tpl($enqu_id,$nextq,$view)
	{
		$question = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->where('number', '=', $nextq)
      ->find();
    if ($question->loaded())
    {
      return $question;
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = $cho_num.__(' is wrong');
      die($view); 
    }
	}

	public static function arr($cho_num,$question_id)
	{
    $qucho = ORM::factory('V1_DtQucho')
      ->where('qu_id', '=', $question_id)
      ->order_by('id')
      ->find_all();
//     $cho_id = 0;
    foreach ($qucho as $k => $d)
    { ++$k;
      if ($k == $cho_num) $cho_id = $d->id; 
    }
    
    if (isset($cho_id))
    {
      $res['chk'] = 1;
      $res['cho_id'] = $cho_id;
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