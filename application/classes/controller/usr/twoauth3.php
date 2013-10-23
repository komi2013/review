<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Usr_Twoauth3 extends Controller
{
	public function action_index()
	{
    require Kohana::find_file('vendor', 'tw/twitteroauth/twitteroauth');

    $domain = Kohana::$config->load('domain');
    $client_id = $domain->get('tw_id');
    $client_secret = $domain->get('tw_secret');
    $tw_callbak = $domain->get('tw_callbak');

    $to = new TwitterOAuth($client_id,$client_secret);
    $tok = $to->getRequestToken($tw_callbak);

    $session = Session::instance();

    $session->set('request_token',$tok['oauth_token']);
    $session->set('request_token_secret',$tok['oauth_token_secret']);
    
    $url = $to->getAuthorizeURL($tok['oauth_token']);

    $this->request->redirect($url);
  }
}
