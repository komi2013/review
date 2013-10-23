<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Usr_Fb3 extends Controller
{
	public function action_index()
	{
    $domain = Kohana::$config->load('domain');
    $client_id =  $domain->get('fb_id');
    $client_secret =  $domain->get('fb_secret');
    $login_url = 'https://www.facebook.com/dialog/oauth?'.$client_id.'redirect_uri=https://'.$_SERVER['HTTP_HOST'].'/usr/fb3/';
    $fb_url = 'https://graph.facebook.com/oauth/access_token?';
    $redirect_uri = 'redirect_uri=https://'.$_SERVER['HTTP_HOST'].'/usr/fb3/&';
    $contents = file_get_contents($fb_url.$client_id.$redirect_uri.$client_secret.'code='.$_GET['code']);
    $arr_url = preg_split('/=/', $contents, -1, PREG_SPLIT_OFFSET_CAPTURE);
    $contents = file_get_contents('https://graph.facebook.com/me?access_token='.$arr_url[1][0]);
    $contents = json_decode($contents,true);
    $maker = ORM::factory('V1_DtMaker')
      ->where('pv_u_id', '=', $contents['id'])
      ->where('provider', '=', 1)
      ->find();
    $maker_id = ($maker->loaded())? $maker->id : $maker->get_new_id();

    $maker->id = $maker_id;
    $maker->pv_u_id = $contents['id'];
    $maker->name = $contents['first_name'];
    $maker->img = 'http://graph.facebook.com/'.$contents['id'].'/picture';
    $maker->provider = 1;
    $maker->save();

    $session = Session::instance('database');
    session_regenerate_id(TRUE);    
    $session->set('maker_id',$maker_id);
    $session->set('pv_u_id',$contents['id']);
    Cookie::set('name', $contents['first_name']);
    Cookie::set('img', 'http://graph.facebook.com/'.$contents['id'].'/picture');
    Cookie::set('lang', 'ja');
    $this->request->redirect('/maker/reviewlist/ ');
	}
}
