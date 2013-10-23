<?php defined('SYSPATH') or die('No direct script access.');
class Model_Api extends Model {
	public $https;
	public $salt_key;
	public $send_data;

    public function grp_mail_val()
    {
   		$post = Validation::factory($_POST[0]);
		$post
			->rule('grp_name', 'not_empty')
			->rule('mail_title', 'not_empty')
			->rule('mail_body', 'not_empty')
			->rule('grp_name', 'max_length', array(':value', '2'))
			->rule('mail_title', 'max_length', array(':value', '200'))
			->rule('mail_body', 'max_length', array(':value', '2000'))
		;
		return $post;
		
		//mail_title, mail_body
    }

    public function send()
    {
		$json_data = json_encode($this->send_data);
		$ecrypt =  new Encrypt($this->salt_key, MCRYPT_MODE_NOFB, MCRYPT_RIJNDAEL_128);
		$encry_data = $ecrypt->encode($json_data);
		$url_safe_base64 = strtr( $encry_data, "+/", "-_" );
		echo $this->https.$url_safe_base64.' /';
		//$send_res = @file_get_contents($this->https.$url_safe_base64.'/');
		//echo Debug::vars($send_res);
		return $send_res ?: 'false';
    }

    public function receive()
    {
		$base64_string = strtr($this->receive_data, "-_", "+/" );
		$this->ecrypt =  new Encrypt($this->salt_key, MCRYPT_MODE_NOFB, MCRYPT_RIJNDAEL_128);
		$json_data = $this->ecrypt->decode($base64_string);
		$obj_data = json_decode($json_data);
		if (!$obj_data)
		{
			header('HTTP/1.0 404 Not Found');
			echo "<h1>404 Not Found</h1>";
			echo "The page that you have requested could not be found.";
			exit();
			//error log is nessecary for malicious user to check how many malicious access
		}
		$arr_data = $this->obj2arr($obj_data);
		return $arr_data;
    }

	public function obj2arr($obj)  
	{
		if ( !is_object($obj) ) return $obj;
		$arr = (array) $obj;
		foreach ( $arr as &$a )
		{
			$a = $this->obj2arr($a);
		}
		return $arr;
	}


}

?>