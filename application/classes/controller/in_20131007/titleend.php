<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_In_TitleEnd extends Controller {
	public function action_index()
	{
    $this->session = Session::instance();
		if (!$this->session->get('pv_u_id')) die('you must login');
    $this->u_id = $this->session->get('u_id');
    $this->enqu_id = $this->request->param('one');
   	$this->lang = $this->request->param('lang');
		$this->q_num = $this->request->param('two');
    $enquete = ORM::factory('enquete')->where('id', '=', $this->enqu_id)->find();
    if (!$enquete->loaded()) die('no question on this page');
    if ($enquete->loaded() AND $enquete->u_id != $this->u_id) die('you can not access this page');
//     $quiz = ORM::factory('quiz')->where('enqu_id', '=', $this->enqu_id)->find();

    $qu_cnt = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->count_all();
    $must_5 = __('you must create 5 question');
    if ($qu_cnt < 5 ) die('{"err":"'.$must_5.'"}'); 

    $this->message = array();
		try
  	{
      if (isset($_POST['run']))
      {
        $enquete->status = 1;
        $enquete->passwd = Text::random('alnum', 12);
      }
      else
      {
        $enquete->title = $_POST['title'];
    		$enquete->end_txt = $_POST['end_txt'];
      }
  		$enquete->save();
    }
		catch (ORM_Validation_Exception $e)
		{
			$this->message = $e->errors($this->lang);
		}
    $this->err['chk'] = 1;
//     $this->err['url'] = $enquete->id;    
    $error = $this->err_msg();
    echo $error; 
	}
	public function err_msg()
	{
    foreach ($this->message as $k => $d)
    {
      $this->err[$k] = preg_replace("/end_txt/",__('end text'),$d);
      ++$this->err['chk'];
    }
    return json_encode($this->err);
  }
}
//end