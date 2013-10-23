<?php defined('SYSPATH') or die('No direct script access.');
class Model_Qucho extends ORM {

protected $_table_name = 'qucho';
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
      'p_qu_id' => array(
          array('not_empty'),
      ),
//       'sum' => array(
// //                array('not_empty'),
//       ),
    );
  }

	public function deladd($txt,$p_qu_id)
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
//       ->bind(':score', $this->score);
		foreach($arr_txt as $k => $d)
		{ ++$k;
//       if ($k == $this->score_qu) $this->score = 1;
//       if (strlen($d) < $this->max_txt)
//       {
        $query->execute();
//         return 1;
//       }
//       else
//       {
//         return 0;
// //         return ('characters must be less than '.$max);
//       }
		}
	}

	public function get($p_qu_id, $expect='')
	{
		$sql = 'SELECT txt FROM qucho WHERE p_qu_id = :p_qu_id ORDER BY id';
		$query = DB::query(Database::SELECT, $sql);
		$query->param(':p_qu_id', $p_qu_id);
		$res = $query->execute();
		$kk = 0;
		foreach ($res as $k => $d) {
			$rows[] = $d['txt'];
			++$kk;
		}
		if ($kk != 0)
		{
			return implode( "\n", $rows );
		}
	}

	public function val($p_qu_id)
	{
		$val = Validation::factory($_POST);
		$val
			->rule('txt', 'not_empty')
			->rule('txt', 'max_length', array(':value', '2000'));
		return $val;
	}

}
?>