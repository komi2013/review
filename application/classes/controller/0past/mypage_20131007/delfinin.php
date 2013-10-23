<?php defined('SYSPATH') OR die('No direct access allowed.');
// delete enquete and change status to finish
class Controller_Mypage_DelFinIn extends Controller {
	public function action_index()
	{
    $this->session = Session::instance();
		if (!$this->session->get('pv_u_id')) die('you must login');
    if ($this->session->get('posted') != 1) die('you can not send many times');
    $this->u_id = $this->session->get('u_id');
    if (isset($_POST['enqu_id']))
    {
      $this->enqu_id = $_POST['enqu_id']);
    }
    else
    {
      die('no enqu_id arg');
    }
//     $this->enqu_id = isset($_POST['enqu_id']) ? $_POST['enqu_id'] : die('no enqu_id arg');
   	$this->lang = Cookie::get('lang');
    $enqu = MyORM::factory('enquete')->where('u_id', '=', $this->u_id)->where('id', '=', $_POST['enqu_id'])->find();
    if (!$enqu->loaded()) die('you can not post this page');
    $this->error['chk'] = 1;
    $message = array();
    if (isset($_POST['status']))
    {
  		try
    	{
        $enqu->status = 2;
     		$enqu->save();
      }
  		catch (ORM_Validation_Exception $e)
  		{
  			$message = $e->errors($this->lang);
  		}
      $this->error_msg($message);
      if ($this->error['chk'] == 1)
      {
        $this->session->set('posted', 2);
      }
      die();
    }

    if (isset($_POST['del']))
    {
  		try
    	{
        $enqu->delete();
        $question_all = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->find_all();
        
        foreach ($question_all as $k => $d)
        {
          $qucho = ORM::factory('qucho')->where('p_qu_id', '=', $d->id)->find_all();
          foreach ($qucho as $kk => $dd)
          {
            DB::delete('ancho')->where('cho_id', '=', $dd->id)->execute();
    //         DB::delete('sex')->where('qucho_id', '=', $dd->id)->execute();
    //         DB::delete('birth')->where('qucho_id', '=', $dd->id)->execute();
    //         DB::factory('country')->where('qucho_id', '=', $dd->id)->execute();
    //         DB::factory('ethnic')->where('qucho_id', '=', $dd->id)->execute();
          }
          DB::delete('qucho')->where('p_qu_id', '=', $d->id)->execute();
        }
        DB::delete('question')->where('enqu_id', '=', $this->enqu_id)->execute();

      }
  		catch (ORM_Validation_Exception $e)
  		{
  			$message = $e->errors($this->lang);
  		}
      $this->error_msg($message);
      if ($this->error['chk'] == 1)
      {
        $this->session->set('posted', 2);
      }
      die();
    }
  }
	public function error_msg($message)
	{
    foreach ($message as $k => $d)
    {
//         $this->error[$k] = preg_replace("/q_txt/",__('question'),$d);
        ++$this->error['chk'];
    }
    $json_err = json_encode($this->error);
    echo $json_err;
  }
}
//end