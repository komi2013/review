<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Usr extends Controller {
	public function action_index()
  {
  	$this->lang = $this->request->param('lang');
//   	$this->one = $this->request->param('one');
    $func = $this->request->param('one');
    $this->$func();
  }
  public function login()
  {
		$domain = new Model_Domain;
		$api = new Model_Api;
// 		$api->receive_data = $this->request->param('two');
    $api->receive_data = $_GET['data'];
    $api->salt_key = $domain->users_key;
		$raw_data = $api->receive();
//     echo Debug::vars($raw_data);
    $session = Session::instance();
    $usr = ORM::factory('usr')->where('pv_u_id', '=', $raw_data['pv_u_id'])->find();
    if (!$usr->loaded())
    {
//       $usr = ORM::factory('usr')->where('id', '=', $session->get('u_id'))->find();
      $usr->pv_u_id = $raw_data['pv_u_id'];
      $usr->create(); //if after answer, update if straight login, insert
      $usr = ORM::factory('usr')->where('pv_u_id', '=', $raw_data['pv_u_id'])->find();
    }
    $session->set('u_id',$usr->id);
    $session->set('pv_u_id',$raw_data['pv_u_id']);
    Cookie::set('name', $raw_data['name']);
    Cookie::set('img', $raw_data['img']);
    
//     echo 'finish set u_id';
    $this->request->redirect('/'.$raw_data['lang'].'/myreview/ ');
  }
  public function logout()
  {
    Session::instance()->destroy();
    $domain = new Model_Domain;    
 	  $this->request->redirect($domain->users.'in/users/logout/');
  }
}
//end