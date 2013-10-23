<?php defined('SYSPATH') or die('No direct script access.');
class Model_V1_DtQucho extends ORM {

protected $_table_name = 'dt_qucho';
protected $_primary_key = 'id';
public $max_txt = 50;
// public $score = 0;
// public $score_qu = 0;
  public function rules()
  {
    return array(
      'txt' => array(
        	array('not_empty'),
      ),
      'score' => array(
          array('not_empty'),
          array('digit'),
          array('range', array(':value', -1000000, 1000000)),
      ),
      'type' => array(
      //    array('not_empty'),
          array('max_length', array(':value', '2')),
      ),
      'nextq' => array(
          array('not_empty'),
          array('digit'),
          array('range', array(':value', -1000000, 1000000)),
      ),
      'qu_id' => array(
          array('not_empty'),
      ),
//       'sum' => array(
// //                array('not_empty'),
//       ),
    );
  }


	public function deladd($arr_cho,$qu_id)
	{
    $qucho = ORM::factory('V1_DtQucho')
      ->where('qu_id', '=', $qu_id)
      ->find_all();

    $different_data = 1;
    $no_record = 1;
    foreach ($qucho as $k => $d)
    {
      ++$no_record;
      if ($d->txt != $arr_cho[$k])
      {
        ++$different_data;
      }
    }
//     echo $different_data; 
    if ($different_data > 1 OR $no_record == 1)
    {
  		$sql='DELETE FROM dt_qucho WHERE qu_id = :qu_id';
  		$query = DB::query(Database::DELETE, $sql)
  			->bind(':qu_id', $qu_id);
  		$query->execute();
  
      $query = DB::insert('dt_qucho', array('qu_id', 'txt'));
      
      foreach ($arr_cho as $k => $d)
      {
        $query->values(array($qu_id, $d));
      }
      
      $query->execute();

    }

	}
	public function deladd_before($txt,$p_qu_id)
	{
    $txt = rtrim($txt, "\n");
		$arr_txt = explode("\n", $txt);
		$arr_txt = array_unique($arr_txt);
		$sql='DELETE FROM qucho WHERE p_qu_id = :p_qu_id';
		$query = DB::query(Database::DELETE, $sql)
			->bind(':p_qu_id', $p_qu_id);
		$query->execute();
		$sql='INSERT INTO qucho(txt, p_qu_id) VALUES (:txt, :p_qu_id)';
		$query = DB::query(Database::INSERT, $sql)
			->bind(':txt', $d)
			->bind(':p_qu_id', $p_qu_id);
		foreach($arr_txt as $k => $d)
		{ ++$k;
      $query->execute();
		}
	}


}
?>