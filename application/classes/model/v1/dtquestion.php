<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_V1_DtQuestion extends ORM {

protected $_table_name = 'dt_question';
protected $_primary_key = 'id';

  public function rules()
  {
      return array(
          'txt' => array(
              array('not_empty'),
              array('max_length', array(':value', 32)),
          ),
          'enqu_id' => array(
              array('not_empty'),
              array('digit'),
          ),
          'type' => array(
              array('not_empty'),
              array('digit'),
          ),
          'point' => array(
              array('not_empty'),
              array('digit'),
          ),
          'number' => array(
              array('not_empty'),
              array('digit'),
          ),
          'limit_ans' => array(
              array('not_empty'),
              array('digit'),
          ),
      );
  }

	public function get_new_id()
	{
		$sql = "select nextval('dt_question_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
// 		return $newid;
	}

	public function del_all_answer()
	{
		$sql = "select nextval('question_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
// 		return $newid;
	}

	public $review = array(
		'transaction' => 1, //1 = transaction 2 = no
		'type' => 1,
		'number' => 1,
	);

	public function review_post()
	{
    $enqu_id = Model_Access_Arg::post_chk_json('enqu');
    $enquete = ORM::factory('T1_DtEnquete')
      ->where('id', '=', $enqu_id)
      ->find();

    $session = Session::instance('database');
    if ($enquete->u_id != $session->get('u_id'))
    {
      $res['chk'] = 4;
      $res['err'] = 'アクセスできません';
      die(json_encode($res)); 
    }
    if ($enquete->status > 0)
    {
      $res['chk'] = 5;
      $res['err'] = '配信中なので編集できません';
      die(json_encode($res)); 
    }

    $res['chk'] = 1; // 1 is no error
		$question = ORM::factory('T1_DtQuestion')
      ->where('enqu_id', '=', $enqu_id)
      ->where('number', '=', $this->review['number'])
      ->find();
    $res['qu_id'] = ($question->loaded())? $question->id : $question->get_new_id();
    
    if ($this->review['transaction'] == 1)
    {
      Database::instance()->begin();
//       $db->begin();
    }
    
		try
  	{
      $question->id = $res['qu_id'];
  		$question->txt = $_POST['q_txt'];
  		$question->enqu_id = $enqu_id;
      $question->type = $this->review['type'];
  		$question->number = $this->review['number'];
      $question->limit_ans = 10000;
      $question->point = 0;
   		$question->save();
    }
		catch (ORM_Validation_Exception $e)
		{
			$message = $e->errors('ja',TRUE,'valid');
      foreach ($message as $k => $d)
      {
//           $res[$k] = $d;
          $res[$k] = preg_replace("/txt/",'question',$d);
          ++$res['chk'];
      }
		}
    return $res;
	}

}