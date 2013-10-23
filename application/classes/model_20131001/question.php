<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Question extends ORM {

protected $_table_name = 'question';
protected $_primary_key = 'id';

    public function rules()
    {
        return array(
            'q_txt' => array(
                array('not_empty'),
                //array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                //array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
                //array('digit'),
            ),
            'enqu_id' => array(
                array('not_empty'),
                array('digit'),
            ),
            'qtype' => array(
                array('not_empty'),
                array('digit'),
            ),
            'q_pt' => array(
                array('not_empty'),
                array('digit'),
            ),
            'q_num' => array(
                array('not_empty'),
                array('digit'),
            ),
//            'del' => array(),
//            'see_pt' => array(
//                array('not_empty'),
//                array('digit')
//            ),
            'limit_ans' => array(
                array('not_empty'),
                array('digit'),
            ),
//            'min_sec' => array(
//                array('not_empty'),
//                array('digit'),
//            ),
//            'max_sec' => array(
//                array('not_empty'),
//                array('digit'),
//            ),
//            'id' => array(
//                array('not_empty'),
//             ),
        );
    }

	public function getnextval()
	{
		$sql = "select nextval('question_id_seq')";
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

}