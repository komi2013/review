<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Answer_Start3 extends Controller {
	public function action_index()
	{
    $this->template = Model_Tpl_Answer::call();
    $enqu_id = Model_Check_Get::tpl('enqu',$this->template);
//     $enqu_id = Model_Access_Arg::get_chk('enqu');
    $passwd = Model_Check_Get::tpl('passwd',$this->template);
    $u_id = Model_Check_Get::tpl('u_id',$this->template);
//     $passwd = Model_Access_Arg::get_chk('passwd');

    $session = Session::instance('database');
    $enquete = ORM::factory('V1_DtEnquete')
      ->where('id', '=', $enqu_id)
      ->find();
    
    if ($enquete->maker_id == $session->get('maker_id'))
    {
      $session->set('nextq', 1);
      $session->set('enqu', $enqu_id);
      $this->request->redirect('/answer/ing/ ');
    }
    
    if (substr($enquete->passwd, 0, 8) == $passwd)
    {
//       $usr = new Model_V1_DtUsr();
//       $u_id = $member_id;
      if ($this->template->device == 'fp')
      {
//         echo Debug::vars($session);
        $arr_session['u_id'] = $u_id;
        $arr_session['nextq'] = 1;
        $arr_session['enqu'] = $enqu_id;
        $encrypt = new Model_Encrypt_Session;
        $encry_session = $encrypt->encode($arr_session);
        $this->request->redirect('/answer/ingfp/?encry='.$encry_session);
      }
      else
      {
        $session->set('u_id', $u_id);
        $session->set('nextq', 1);
        $session->set('enqu', $enqu_id);
        $this->request->redirect('/answer/ing/ ');
      }
    }
    else
    {
      $this->template->content = View::factory('tpl/err_'.$this->template->device);
      $this->template->content->msg = 'アンケートパスワードが違います';
      die($this->template); 
    }
    
	}
}
//end