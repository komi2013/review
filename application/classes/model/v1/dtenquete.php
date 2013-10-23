<?php defined('SYSPATH') or die('No direct script access.');
class Model_V1_DtEnquete extends ORM {

protected $_table_name = 'dt_enquete';
//protected $_primary_key = 'id';

    public function rules()
    {
        return array(
            'title' => array(
                array('not_empty'),
                //array('digit'),
            ),
            'end' => array(
                array('not_empty'),
                //array('digit'),
            ),
        );
    }

  public function get_new_id() 
  {
    $res = DB::query("select nextval('dt_enquete_id_seq')")->execute();
    return $res[0]['nextval'];
  }

  public function delete()
  {
    $question = ORM::factory('dt_question')->where('enqu_id', '=', $this->id)->find_all();
    
    foreach ($question as $k => $d)
    {
      $qucho = ORM::factory('dt_qucho')->where('qu_id', '=', $d->id)->find_all();
      foreach ($qucho as $kk => $dd)
      {
        DB::delete('ancho')->where('cho_id', '=', $dd->id)->execute();
//         DB::delete('sex')->where('qucho_id', '=', $dd->id)->execute();
//         DB::delete('birth')->where('qucho_id', '=', $dd->id)->execute();
//         DB::factory('country')->where('qucho_id', '=', $dd->id)->execute();
//         DB::factory('ethnic')->where('qucho_id', '=', $dd->id)->execute();
      }
      DB::delete('dt_qucho')->where('qu_id', '=', $d->id)->execute();
    }
    DB::delete('dt_question')->where('enqu_id', '=', $this->id)->execute();
    parent::delete();
//        echo View::factory('profiler/stats');
  }
}
?>