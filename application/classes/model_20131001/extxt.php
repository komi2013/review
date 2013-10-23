<?php defined('SYSPATH') or die('No direct script access.');
class Model_Extxt extends ORM
{

protected $_table_name = 'extxt';
//protected $sum = 0;
//protected $_primary_key = 'p_qu_id';
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
                array('not_empty'),
//                array('range', array(':value', -1000000, 1000000)),
            ),
            'nextq' => array(
                array('not_empty'),
                array('digit'),
                array('range', array(':value', -1000000, 1000000)),
            ),
//            'sum' => array(
//                array('not_empty'),
//            ),
//            'del' => array(),
//            'id' => array(
//                array('not_empty'),
//            ),
        );
    }
}
?>