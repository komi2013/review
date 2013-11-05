<?php defined('SYSPATH') or die('No direct script access.');
//APPPATH = /prd/review/application/

require SYSPATH.'classes/kohana/core'.EXT;
if (is_file(APPPATH.'classes/kohana'.EXT))
{
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	require SYSPATH.'classes/kohana'.EXT;
}
date_default_timezone_set('Asia/Tokyo');
setlocale(LC_ALL, 'en_US.utf-8');
spl_autoload_register(array('Kohana', 'auto_load'));
ini_set('unserialize_callback_func', 'spl_autoload_call');
I18n::lang('en-us');
// Kohana::$environment = Kohana::PRODUCTION;
// if (isset($_SERVER['KOHANA_ENV']))
// {
// //   echo $_SERVER['KOHANA_ENV'];
// //   die();
// 	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
// //   echo 
// }
// var_dump($_SERVER['KOHANA_ENV']);


// echo Kohana::PRODUCTION;
Kohana::init(array(
// 	'base_url'   => '/stg',
	'profile' => FALSE,
  'index_file' => FALSE,
//   'errors' => FALSE,
));
error_reporting(E_ALL & ~E_NOTICE);
Kohana::$log->attach(new Log_File(APPPATH.'logs'));
Kohana::$config->attach(new Config_File);
Kohana::modules(array(
// 	 'auth'       => MODPATH.'auth',       // Basic authentication
 	 'cache'      => MODPATH.'cache',      // Caching with multiple backends
//    'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
// 	 'image'      => MODPATH.'image',      // Image manipulation
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
//    'unittest'   => MODPATH.'unittest',   // Unit testing
	));

Cookie::$salt = 'QoQfRPscdI';
Cookie::$expiration = 604800;
// error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);
$uri = preg_split("/[\/]+/", $_SERVER['REQUEST_URI']);
Route::set('default', '(<directory>(/<controller>(/<action>)))')
->defaults(array(
    'directory' => 'home',
    'controller' => $uri[1] ?: 'home',
    'action'     => 'index',
));
// throw HTTP_Exception::factory(404, 'File not found!');

// ini_set( 'display_errors', 0 );
// $request->execute();

// $request = Request::factory();
// // 
// try {
//     $response = $request->execute();
// } catch (Exception $e) {
// //     if (Kohana::$environment == Kohana::DEVELOPMENT) {
// //         throw $e;
// //     }
// 
//     Kohana::$log->add(Log::ERROR, $e->getMessage());
//     die('Four Oh\' Four');
// }
// catch (Exception $e)
// {
// echo $e;
// echo 'error';
// }