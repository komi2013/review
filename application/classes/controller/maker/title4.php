<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Maker_Title4 extends Controller {
	public function action_index()
	{
    $enqu_id = Model_Check_Get::json('enqu');
    Model_Check_Csrf::json();
    $session = Session::instance('database');
    Model_Check_Session::json('pv_u_id',$session);
    $enquete = Model_Check_Enquete::json($enqu_id,$session);
    Model_Check_EnquStatus::json($enquete);
		try
  	{
      $enquete->title = $_GET['title'];
  		$enquete->present_domain = $_GET['domain'];
      $enquete->present_passwd = $_GET['passwd'];
      $enquete->update();
      $res['chk'] = 1;
      $csrf = Text::random('alnum', 16);
      $res['csrf_renew'] = $csrf;
      Cookie::set('csrf',$csrf);
      die(json_encode($res));
    }
    catch (ORM_Validation_Exception $e)
    {
			$message = $e->errors('ja',TRUE,'valid');
      foreach ($message as $k => $d)
      {
        $res[$k] = preg_replace("/title/",'タイトル',$d);
        $res[$k] = preg_replace("/present_domain/",'プレゼントドメイン',$d);
        $res[$k] = preg_replace("/present_passwd/",'プレゼントパスワード',$d);
        $res['chk'] = 2;
      }
      die(json_encode($res));
    }
  }
}
//end