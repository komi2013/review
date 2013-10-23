<?php

class Model_DtQucho extends \Orm\Model
{
  protected static $_observers = array(
      'Orm\Observer_CreatedAt' => array('before_insert'),
      'Orm\Observer_UpdatedAt' => array('before_save'),
      'Orm\Observer_Validation' => array('before_save'),
  );

	protected static $_properties = array(
    'id',
    'qu_id' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'txt' => array(
      'data_type' => 'varchar',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => '',
    ),
    'score' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'nextq' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'type' => array(
      'data_type' => 'varchar',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => '',
    ),
    'sum' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
	);
	protected static $_table_name = 'dt_qucho';

  public function get_new_id() 
  {
    $res = DB::query("select nextval('dt_qucho_id_seq')")->execute();
    return $res[0]['nextval'];
  }

	public function deladd($txt,$qu_id)
	{
    $txt = rtrim($txt, "\n");
		$arr_txt = explode("\n", $txt);
		$arr_txt = array_unique($arr_txt);
// 		$sql='DELETE FROM qucho WHERE p_qu_id = :p_qu_id';

    $sql = 'DELETE FROM dt_qucho WHERE qu_id = '.$qu_id;
    $query = DB::query($sql);
    $result = $query->execute();

// 		$query = DB::query(Database::DELETE, $sql)
// 			->bind(':p_qu_id', $p_qu_id);
// 		$query->execute();

// 		$sql='INSERT INTO qucho(txt, qu_id) VALUES (:txt, :qu_id)';
// 		$query = DB::query(Database::INSERT, $sql)
// 			->bind(':txt', $d)
// 			->bind(':qu_id', $qu_id);
//       ->bind(':score', $this->score);
		foreach($arr_txt as $k => $d)
		{
      $sql = 'INSERT INTO dt_qucho(txt, qu_id) VALUES (:txt, :qu_id)';
      $query = DB::query($sql);
      
      $params = array('txt' => $d, 'qu_id' => $qu_id);
      $query->parameters($params);
      $result = $query->execute();
		}
	}


}
