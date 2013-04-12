<?php defined('SYSPATH') or die('No direct script access.');
class Model_Enquete extends ORM {

protected $_table_name = 'enquete';
//protected $_primary_key = 'id';

    public function rules()
    {
        return array(
            'title' => array(
                array('not_empty'),
                //array('digit'),
            ),
            'end_txt' => array(
                array('not_empty'),
                //array('digit'),
            ),
        );
    }

	public function getnextval()
	{
		$sql = "select nextval('enquete_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
// 		return $newid;
	}
  public function delete()
  {
    $question = ORM::factory('question')->where('enqu_id', '=', $this->id)->find_all();
    
    foreach ($question as $k => $d)
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
    DB::delete('question')->where('enqu_id', '=', $this->id)->execute();
    parent::delete();
//        echo View::factory('profiler/stats');
  }
}
?>