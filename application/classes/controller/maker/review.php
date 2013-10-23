<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Maker_Review extends Controller_Template {
	public function action_index()
	{
    $this->template = Model_Tpl_Outer::call();
    $enqu_id = Model_Check_Get::tpl('enqu',$this->template);
    $session = Session::instance('database');
    Model_Check_Session::tpl('pv_u_id',$session,$this->template);
    $enqu = Model_Check_Enquete::tpl($enqu_id,$session,$this->template);
    Model_Check_EnquStatus::tpl($enqu,$this->template);

		$question = ORM::factory('V1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->order_by('number')
      ->find_all();
      
    $record = 0;
    $arr_qu = array();
    $free_txt_question = '';
    foreach ($question as $d)
    {
//       echo Debug::vars($d);
      if ($d->number < 5)
      {
        $arr_qu_id[] = $d->id;
        $arr_qu[$d->id][$d->id] = $d->id;
        $arr_qu[$d->id]['number'] = $d->number;
        $arr_qu[$d->id]['txt'] = $d->txt;
        ++$record;
      }
      else
      {
        $free_txt_question = $d->txt;
      }
    }
    if ($record > 0)
    {
      $qucho = ORM::factory('V1_DtQucho')->where('qu_id', 'in', $arr_qu_id)->order_by('id')->find_all();
  
      foreach ($qucho as $k => $d)
      {
        $arr_qu[$d->qu_id]['cho'][] = $d->txt;
      }
    } 
    $this->template->title = 'マイレビュー';
	  $this->template->content = View::factory('maker/review');
    $this->template->content->arr_qu = $arr_qu;
    $this->template->content->free_txt_question = $free_txt_question;
    
//     $this->template->content->qu_arr = $this->qu_arr;
//     $this->template->content->qu_disp = $this->qu_disp;
	}
//   public function blank_question($d_q_num)
//   {
//     while ($this->k_num < $d_q_num)
//     {
//       $this->qu_disp[$this->k_num]['none'] = ($this->k_num == 1)? 'qu_disp_is' : 'qu_disp_none';
//       $this->qu_arr[$this->k_num] = 'question'.' '.$this->k_num;
//       if ($this->k_num != 5) $this->cho_arr[$this->k_num] = array('very bad','bad','ok','good','very good');
//       ++$this->k_num;
//     }
//   }
}
//end