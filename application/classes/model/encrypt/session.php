<?php defined('SYSPATH') or die('No direct script access.');
class Model_Encrypt_Session extends Model {

  public $salt_key = 'test';
	public function encode($arr_arg)
	{
    $json_data = json_encode($arr_arg);
    $ecrypt = new Encrypt($this->salt_key, MCRYPT_MODE_NOFB, MCRYPT_RIJNDAEL_128);
    $encry_data = $ecrypt->encode($json_data);
    $url_safe_base64 = strtr($encry_data, "+/", "-_" );
    return $url_safe_base64;
	}
	public function decode($encry_session)
	{
		$base64_string = strtr($encry_session, "-_", "+/" );
		$ecrypt =  new Encrypt($this->salt_key, MCRYPT_MODE_NOFB, MCRYPT_RIJNDAEL_128);
		$json_data = $ecrypt->decode($base64_string);
// 		$obj_data = json_decode($json_data);
// 		if (!$obj_data)
// 		{
// 			header('HTTP/1.0 404 Not Found');
// 			echo "<h1>404 Not Found</h1>";
// 			echo "The page that you have requested could not be found.";
// 			die();
// 			//error log is nessecary for malicious user to check how many malicious access
// 		}
// 		$arr_data = $this->obj2arr($obj_data);
// 		return $arr_data;
    return json_decode($json_data,true);
	}
	public function test($arr_arg)
	{
    echo 'inside of test';
    return $arr_arg;
	}
	public static function fac()
	{
		// Set class name
// 		$model = 'Model_'.ucfirst($model);

		return new Model_Encrypt_Session();
	}

}

?>