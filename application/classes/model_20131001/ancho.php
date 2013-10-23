<?php defined('SYSPATH') or die('No direct script access.');
class Model_Ancho extends ORM {
  protected $_table_name = 'ancho';
  public $q_enqu_id;
  public $q_u_id;
  public function rules()
  {
    return array(
      'cho_id' => array(
        array('not_empty'),
        array('digit'),
        array('range', array(':value', -1000000, 1000000)),
      ),
    );
  }
  public function save()
  {
    parent::save();
    if($this->saved())
    {
			$qucho = ORM::factory('qucho')->where('id', '=', $this->cho_id)->find();
			++$qucho->sum;
			$qucho->update();

      $question = ORM::factory('question')->where('id', '=', $qucho->p_qu_id)->find();

			$sm_endans = ORM::factory('smEndans')->where('enqu_id', '=', $question->enqu_id)->where('u_id', '=', $this->u_id)->find();
			$sm_endans->enqu_id = $question->enqu_id;
      $sm_endans->u_id = $this->u_id;
      $sm_endans->q_pt += 0;
      ++$sm_endans->score;
      $sm_endans->name  = Cookie::get('name') ?: 'guest';
      $sm_endans->img  = Cookie::get('img') ?: 'no image';
      $sm_endans->spend_time  += time() - Cookie::get('spend_time');
      $sm_endans->save();

			
// 			$sumtype = ORM::factory('sumtype')->where('enqu_id', '=', $this->enqu_id)->where('u_id', '=', $this->u_id)->where('type', '=', $qucho->type)->find();
// 			$sumtype->enqu_id = $this->enqu_id;
//       $sumtype->u_id = $this->u_id;
// 			$sumtype->type = $qucho->type;
// 			++$sumtype->sum;
// 			$sumtype->save();
    }
  }
  public function delete()
  {
		$qucho = ORM::factory('qucho')->where('id', '=', $this->cho_id)->find();
    if ($qucho->loaded())
    {
  	  --$qucho->sum;
		  $qucho->update();
    }
//     $sm_endans = ORM::factory('endans')->where('enqu_id', '=', $question->enqu_id)->where('u_id', '=', $this->u_id)->find();
//     if ($sm_endans->loaded()) $sm_endans->delete();

//     $qu = ORM::factory('question')->where('enqu_id', '=', $this->q_enqu_id)->find_all();
    parent::delete();

//        echo View::factory('profiler/stats');
    

  }
}
?>