<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_End5 extends Controller_All {
	public function action_index()
	{
    parent::all();
    $this->u_id = $this->session->get('u_id');
		$this->q_num = $this->request->param('two');
    $this->enquete = ORM::factory('enquete')->where('id', '=', $this->enqu_id)->find();

    $sm_endans = ORM::factory('smEndans')->where('enqu_id', '=', $this->enqu_id)
        ->where('u_id', '=', $this->u_id)->where('score', '>', 3)->find();

    if (!$sm_endans->loaded())
    {
      die('you must answer first');
    }
    elseif ($this->q_num == 'txt')
    {
      $this->antxt();
    }
    elseif (substr($this->enquete->passwd, 4) == $this->q_num)
    {
      Cookie::set('enqu_ans', $this->enqu_id);
      $this->qucho();
    }
    elseif (is_null($this->q_num))
    {
      $this->qucho(); 
    }
    $this->template->content->enquete = $this->enquete;
    $this->page_title = $this->enquete->title;
    $this->template->content->lang = $this->lang;
  }
  public function qucho()
  {    
    $question = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->order_by('q_num')->find_all();
    
    foreach ($question as $k => $d)
    {
      if ($d->q_num == 5)
      {
        $antxt_txt  = $d->q_txt;
      }
      else
      {
        $qucho = ORM::factory('qucho')->where('p_qu_id', '=', $d->id)->order_by('id')->find_all();
        $denominator = 0;
        $sm_q_answer = 0;
        foreach ($qucho as $kk => $dd)
        {
          $denominator = $denominator + $dd->sum;
          $statics[$d->q_num]['sum'][$dd->txt] = $dd->sum;
          $sm_q_answer = $sm_q_answer + $dd->sum;
        }  
        $statics[$d->q_num]['q_txt']  = $d->q_txt;
        $statics[$d->q_num]['denominator']  = $denominator;
         
      }
      
    }
		$this->template->content = View::factory('five/end_review');
		$this->template->content->statics = $statics;
    $this->template->content->antxt_txt = $antxt_txt;
    $this->template->content->login = $this->session->get('pv_u_id');
    $this->template->content->u_answered = $sm_q_answer;
	}
  public function antxt()
  {
    if (!$this->session->get('pv_u_id')) die('you must login to see this answers');
    $this->enquete = ORM::factory('enquete')->where('id', '=', $this->enqu_id)->find();
    $question = ORM::factory('question')->where('enqu_id', '=', $this->enqu_id)->find();
    $antxt = ORM::factory('antxt')->where('p_qu_id', '=', $question->id)->order_by('id','desc')->find_all();
		$this->template->content = View::factory('five/antxt');
    $this->template->content->q_txt = $question->q_txt;
    $this->template->content->antxt = $antxt;
	}
}
//end