<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Maker_Run4 extends Controller {
	public function action_index()
	{
    $enqu_id = Model_Check_Get::json('enqu');
    Model_Check_Csrf::json();
//     Model_Access_Arg::post_csrf_chk_json();
    $session = Session::instance('database');
    Model_Check_Session::json('pv_u_id',$session);

    $enquete = Model_Check_Enquete::json($enqu_id,$session);
    Model_Check_EnquStatus::json($enquete);
    
    $qu_cnt = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->count_all();

    if ($qu_cnt < 5 )
    {
      $res['chk'] = 4;
      $res['chk'] = '5つの質問を作成してください';
      die(json_encode($res));
    }
    
    $enquete->status = 1;
    $enquete->passwd = Text::random('alnum', 12);
    $enquete->update();
    $res['chk'] = 1;
    $csrf = Text::random('alnum', 16);
//     $res['csrf_renew'] = $csrf;
    Cookie::set('csrf',$csrf);
    die(json_encode($res));
  }
}
//end