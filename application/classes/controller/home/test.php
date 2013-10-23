<?php defined('SYSPATH') OR die('No direct access allowed.');
class Controller_Home_Test extends Controller_Template {

	public function action_index()
	{
    
//     new Model_Encrypt_Session();->test('test');
//        Model_Encrypt_Session::instance();
//     new Model_Encrypt_Session()->test('test');
//     $test = new Model_Encrypt_Session();
//     $test->test('aaa');  
//     $res = @file_get_contents('https://quiz.komahana.info/test1.php');
//     $arr_res = json_decode($res,true);
//     echo Debug::vars($arr_res);
    $this->template = View::factory('/home/instgram');
//     $this->template->content = View::factory('/home/test');
    
    
	}

}
//end