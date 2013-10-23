<?php defined('SYSPATH') or die('No direct script access.');
class Model_Check_Enquete extends Model {

	public static function tpl($enqu_id,$session,$view)
	{
    $enqu = ORM::factory('V1_DtEnquete')
      ->where('id', '=', $enqu_id)
      ->find();
    if ($enqu->maker_id == $session->get('maker_id'))
    {
      return $enqu;
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $view->content = View::factory('tpl/err_'.$view->device);
      $view->content->msg = __('no access right');
      die($view); 
    }
	}
	public static function json($enqu_id,$session)
	{
    $enqu = ORM::factory('V1_DtEnquete')
      ->where('id', '=', $enqu_id)
      ->find();
    if ($enqu->maker_id == $session->get('maker_id'))
    {
      return $enqu;
    }
    else
    {
      I18n::lang(Cookie::get('lang'));
      $res['chk'] = 4;
      $res['err'] = __('no access right');
      die(json_encode($res)); 
    
    }    
	}
}

?>