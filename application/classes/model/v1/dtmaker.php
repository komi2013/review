<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_V1_DtMaker extends ORM {
  protected $_table_name = 'dt_maker';
  protected $_primary_key = 'id';
  public function rules()
  {
    return array(
      'pv_u_id' => array(
        array('not_empty'),
//         array('digit'),
      ),
    );
  }
	public function get_new_id()
	{
		$sql = "select nextval('dt_maker_id_seq')";
		$query = DB::query(Database::SELECT, $sql);
		$res = $query->execute();
		return $res['nextval']['nextval'];
	}
}