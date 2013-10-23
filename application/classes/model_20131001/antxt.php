<?php defined('SYSPATH') or die('No direct script access.');
class Model_Antxt extends ORM
{

	protected $_table_name = 'antxt';
	public $mini = 1;
	public $maxi = 100;
//protected $_primary_key = 'p_qu_id';
//$qutxt = ORM::factory('qutxt')->where('p_qu_id', '=', $this->p_qu_id)->find();

    public function rules()
    {
        return array(
            'txt' => array(
//                array('not_empty'),
                array('min_length', array(':value', $this->mini)),
                array('max_length', array(':value', $this->maxi)),
            ),
        );
    }
}
?>