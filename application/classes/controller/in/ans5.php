<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_Ans5 extends Controller {
	public function action_index()
	{
    $this->enqu_id = $this->request->param('one');
		$this->q_num = $this->request->param('two');
   	if (Cookie::get('enqu_ans') != $this->enqu_id) die('you can not post this page');
    if (Cookie::get('nextq') != $this->q_num) die('you can not post this page');
    $this->session = Session::instance();
    $this->u_id = $this->session->get('u_id');
    $this->lang = $this->request->param('lang');

		$question = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->where('q_num', '=', $this->q_num)->find();
    if (!$question->loaded()) die('no question on this page');
    $message = array();
    if (isset($_POST['txt']))
    {
      $antxt = ORM::factory('antxt')->where('p_qu_id', '=', $question->id)->where('u_id', '=', $this->u_id)->find();
      if ($antxt->loaded()) die('you can not send many times');
      $antxt = ORM::factory('antxt');
  		try
    	{
        $antxt->p_qu_id = $question->id;
        $antxt->u_id = $this->u_id;
        $antxt->mini = 0;
        $antxt->maxi = 2000;
    		$antxt->txt = $_POST['txt'];
    		$antxt->save();
        $nextq = $this->q_num + 1;
      }
  		catch (ORM_Validation_Exception $e)
  		{
  			$message = $e->errors($this->lang);
  		}
    }
    else
    {
      $qucho = ORM::factory('qucho')->where('p_qu_id', '=', $question->id)->order_by('id')->find_all();
      $cho_id = '';
      foreach ($qucho as $k => $d)
      { ++$k;
        if ($k == $_POST['id']) $cho_id = $d->id; 
      }
      error_reporting(E_ALL & E_NOTICE);
      $ancho = ORM::factory('ancho')->where('p_qu_id', '=', $question->id)->where('u_id', '=', $this->u_id)->find();
      if ($ancho->loaded()) die('you can not send many times');
      $ancho = ORM::factory('ancho');
  		try
    	{
        $ancho->p_qu_id = $question->id;
        $ancho->u_id = $this->u_id;
    		$ancho->cho_id = $cho_id;
    		$ancho->save();
      }
  		catch (ORM_Validation_Exception $e)
  		{
  			$message = $e->errors($this->lang);
  		}
    }
    foreach ($message as $k => $d)
    {
      echo $d."\n";
    }
    Cookie::set('nextq', $this->q_num + 1);
    echo '1 ';
	}
}
//end