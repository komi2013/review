<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Answer_IngFp extends Controller_Template {
	public function action_index()
	{
    $this->template = Model_Tpl_Answer::call();
    $encry = Model_Check_Get::tpl('encry',$this->template);
    $encrypt = new Model_Encrypt_Session;
    $arr_session = $encrypt->decode($encry);
    $enqu_id = $arr_session['enqu'];
    $currentq = $arr_session['nextq'];

    if (isset($_GET['cho_num']))
    {
      $question = Model_Check_Question::json($enqu_id,$currentq);
      $res = Model_Check_ChoiceId::arr($_GET['cho_num'],$question->id);
      if ($res['chk'] == 1)
      {
        error_reporting(E_ALL & E_NOTICE);
        $ancho = ORM::factory('V1_DtAncho');
        $ancho->qu_id = $question->id;
        $ancho->u_id = $arr_session['u_id'];
    		$ancho->cho_id = $res['cho_id'];
    		$ancho->save();
        $arr_session['nextq'] = ++$currentq;
      }
    }

    if (isset($_GET['txt']))
    {
      $question = Model_Check_Question::json($enqu_id,$currentq);
  		try
    	{
        $antxt = ORM::factory('V1_DtAntxt');
        $antxt->qu_id = $question->id;
        $antxt->u_id = $arr_session['u_id'];
    		$antxt->txt = $_GET['txt'];
    		$antxt->save();
        $arr_session['nextq'] = $currentq = 'end';
      }
  		catch (ORM_Validation_Exception $e)
  		{
  			$message = $e->errors('ja',TRUE,'valid');
//         echo Debug::vars(@$message);
        foreach ($message as $k => $d)
        {
          $res['err'] = preg_replace("/txt/",'テキスト',$d);
          $res['chk'] = 2;
        }
  		}
    }
//     echo Debug::vars(@$_GET);

    if ($currentq == 'end')
    {
      $encrypt = new Model_Encrypt_Session;
      $encry_session = $encrypt->encode($arr_session);
      $this->request->redirect('/answer/endfp/?encry='.$encry_session);
    }
    
    $question = Model_Check_Question::tpl($enqu_id,$currentq,$this->template);
    $this->template->title = $question->txt;
    
    if ($question->type == 1)
    {
      error_reporting(E_ALL & E_NOTICE);
      $ancho = ORM::factory('V1_DtAncho')
        ->where('qu_id', '=', $question->id)
        ->where('u_id', '=', $arr_session['u_id'])
        ->find();
      if ($ancho->loaded())
      {
        $arr_session['nextq'] = $currentq + 1;
        $encrypt = new Model_Encrypt_Session;
        $encry_session = $encrypt->encode($arr_session);
        $this->request->redirect('/answer/ingfp/?encry='.$encry_session);
      }
      $qucho = ORM::factory('V1_DtQucho')
        ->where('qu_id', '=', $question->id)
        ->order_by('qu_id','asc')
        ->find_all();
      $this->template->content = View::factory('answer/ing_cho_'.$this->template->device);
      $this->template->content->qu = $question;
      $this->template->content->qucho = $qucho;
    }
    elseif ($question->type == 5)
    {
      $antxt = ORM::factory('V1_DtAntxt')
        ->where('qu_id', '=', $question->id)
        ->where('u_id', '=', $arr_session['u_id'])
        ->find();
      if ($antxt->loaded())
      {
        $arr_session['nextq'] = 'end';
        $encrypt = new Model_Encrypt_Session;
        $encry_session = $encrypt->encode($arr_session);
        $this->request->redirect('/answer/ingfp/?encry='.$encry_session);
      }
      $this->template->content = View::factory('answer/ing_txt_'.$this->template->device);
      $this->template->content->qu = $question;
    }
    $encrypt = new Model_Encrypt_Session;
    $encry_session = $encrypt->encode($arr_session);
    $this->template->content->encry = $encry_session;
    if (isset($res['err']))
    {
      $this->template->content->err_msg = $res['err'];
    }
    else
    {
      $this->template->content->err_msg = '';
    }
    
//     catch
//     Cookie::set('spend_time', time());
	}
}
//end