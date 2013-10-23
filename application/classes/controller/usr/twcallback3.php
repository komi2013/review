<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Usr_Twcallback3 extends Controller
{
	public function action_index()
	{
    require Kohana::find_file('vendor', 'tw/twitteroauth/twitteroauth');
    $domain = Kohana::$config->load('domain');
    $client_id = $domain->get('tw_id');
    $client_secret = $domain->get('tw_secret');
    $tw_callbak = $domain->get('tw_callbak');
    
    $verifier = $_GET['oauth_verifier'];
    $session = Session::instance();
    $to = new TwitterOAuth($client_id,$client_secret,$session->get('request_token'),$session->get('request_token_secret'));
    $access_token = $to->getAccessToken($verifier);
    $to->host = 'https://api.twitter.com/1.1/'; // By default library uses API version 1.  
    $profile = $to->get('/users/show.json?screen_name='.$access_token['screen_name'].'&user_id='.$access_token['user_id']);
    $session->set('oauth_token',$access_token['oauth_token']);
    $session->set('oauth_token_secret',$access_token['oauth_token_secret']);
    $session->set('screen_name',$access_token['screen_name']);

    $maker = ORM::factory('V1_DtMaker')
      ->where('pv_u_id', '=', $access_token['user_id'])
      ->where('provider', '=', 2)
      ->find();

    $maker_id = ($maker->loaded())? $maker->id : $maker->get_new_id();

    $maker->id = $maker_id;
    $maker->pv_u_id = $access_token['user_id'];
    $maker->name = $access_token['screen_name'];
    $maker->img = $profile->profile_image_url_https;
    $maker->provider = 2;
    $maker->save();

    $session = Session::instance('database');
    session_regenerate_id(TRUE);    
    $session->set('maker_id',$maker_id);
    $session->set('pv_u_id',$access_token['user_id']);
    Cookie::set('name', $access_token['screen_name']);
    Cookie::set('img', $profile->profile_image_url_https);
    Cookie::set('lang', 'ja');
    $this->request->redirect('/maker/reviewlist/ ');
	}
}
