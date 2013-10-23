<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Usr_Fb extends Controller {
	public function action_index()
  {
    $domain = new Model_Domain;
    $client_id = $domain->fb_id;
    $client_secret = $domain->fb_secret;

    $login_url = 'https://www.facebook.com/dialog/oauth?'.$client_id.'redirect_uri=https://'.$_SERVER['HTTP_HOST'].'/usr/fb/';

    $fb_url = 'https://graph.facebook.com/oauth/access_token?';
    $redirect_uri = 'redirect_uri=https://'.$_SERVER['HTTP_HOST'].'/usr/fb/&';
    
    
    
    $contents = file_get_contents($fb_url.$client_id.$redirect_uri.$client_secret.'code='.$_GET['code']);
    $arr_url = preg_split('/=/', $contents, -1, PREG_SPLIT_OFFSET_CAPTURE);
    $contents = file_get_contents('https://graph.facebook.com/me?access_token='.$arr_url[1][0]);
    $contents = json_decode($contents);

//     echo Debug::vars($contents);
    
    $id = $contents->id;
    echo '<img src="'.'http://graph.facebook.com/'.$id.'/picture'.'">';
    $session = Session::instance();
    $session->set('pv_u_id',$contents->id);
    Cookie::set('name', $contents->first_name);
    Cookie::set('img', 'http://graph.facebook.com/'.$contents->id.'/picture');

    $usr = MyORM::factory('usr')->where('pv_u_id', '=', $contents->id)->where('provider', '=', 1)->find();
//     echo View::factory('profiler/stats');
//     die('test');
    if ($usr->loaded())
    {
      $session->set('u_id',$usr->id);
      $session->set('collabo_id',$usr->collabo_id);
      $session->set('grade',$usr->grade);
      $usr->name = $contents->first_name;
      $usr->img = 'http://graph.facebook.com/'.$contents->id.'/picture';
//       $usr->date = date("Y-m-d", time());
      $usr->save();
      $this->request->redirect('/mypage/ ');
    }
    else
    {
      $u_id = $this->getnextval();
      $usr->pv_u_id = $contents->id;
//       $usr->stage = 1;
      $usr->name = $contents->first_name;
      $usr->img = 'http://graph.facebook.com/'.$contents->id.'/picture';
      $usr->id = $u_id;
      $usr->provider = 1;
      $usr->save();
      $session->set('u_id',$u_id);
      $this->request->redirect('/tutorial/player/ ');
    }
  }
  public function action_redirect()
  {
    $domain = new Model_Domain;
    $client_id = $domain->fb_id;
 	  $this->request->redirect("https://www.facebook.com/dialog/oauth?".$client_id."redirect_uri=https://".$_SERVER['HTTP_HOST'].'/usr/fb/');
  }

	public function getnextval()
	{
		$sql = "select nextval('usr_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
// 		return $newid;
	}
	public function action_nothing()
	{
    echo 'nothing';
// 		$sql = "select nextval('usr_id_seq')";
// 		$query = DB::query(Database::SELECT, $sql);
// 		$res = $query->execute();
// 		return $res['nextval']['nextval'];
// 		return $newid;
	}


}
//end