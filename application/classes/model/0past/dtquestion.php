<?php

class Model_DtQuestion extends \Orm\Model
{
  protected static $_observers = array(
      'Orm\Observer_CreatedAt' => array('before_insert'),
      'Orm\Observer_UpdatedAt' => array('before_save'),
      'Orm\Observer_Validation' => array('before_save'),
  );

	protected static $_properties = array(
    'id',
    'q_txt' => array(
      'data_type' => 'varchar',
      'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => '',
    ),
    'enqu_id' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'qtype' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'q_pt' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'q_num' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'see_pt' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'limit_ans' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'min_sec' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'max_sec' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
    'rand_grp' => array(
      'data_type' => 'int',
//       'validation' => array('required', 'min_length' => array(3), 'max_length' => array(20)),
      'default' => 0,
    ),
	);
// 
// 	protected static $_observers = array(
// 		'Orm\Observer_CreatedAt' => array(
// 			'events' => array('before_insert'),
// 			'mysql_timestamp' => false,
// 		),
// 		'Orm\Observer_UpdatedAt' => array(
// 			'events' => array('before_update'),
// 			'mysql_timestamp' => false,
// 		),
// 	);
	protected static $_table_name = 'dt_question';

  public function get_new_id() 
  {
    $res = DB::query("select nextval('dt_question_id_seq')")->execute();
    return $res[0]['nextval'];
  }


}
