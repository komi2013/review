<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-04 00:04:30 --- ERROR: ErrorException [ 1 ]: Call to undefined function H() ~ APPPATH/views/maker/review.php [ 13 ]
2013-10-04 00:04:30 --- STRACE: ErrorException [ 1 ]: Call to undefined function H() ~ APPPATH/views/maker/review.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-04 00:04:44 --- ERROR: ErrorException [ 4096 ]: Object of class H could not be converted to string ~ APPPATH/views/maker/review.php [ 13 ]
2013-10-04 00:04:44 --- STRACE: ErrorException [ 4096 ]: Object of class H could not be converted to string ~ APPPATH/views/maker/review.php [ 13 ]
--
#0 /stg/review/application/views/maker/review.php(13): Kohana_Core::error_handler(4096, 'Object of class...', '/stg/review/app...', 13, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template.php(54): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-04 00:05:50 --- ERROR: ErrorException [ 1 ]: Call to undefined function H() ~ APPPATH/views/maker/review.php [ 13 ]
2013-10-04 00:05:50 --- STRACE: ErrorException [ 1 ]: Call to undefined function H() ~ APPPATH/views/maker/review.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-04 10:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-04 10:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-04 10:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-04 10:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-04 10:11:26 --- ERROR: ErrorException [ 4096 ]: Object of class H could not be converted to string ~ APPPATH/views/maker/review.php [ 13 ]
2013-10-04 10:11:26 --- STRACE: ErrorException [ 4096 ]: Object of class H could not be converted to string ~ APPPATH/views/maker/review.php [ 13 ]
--
#0 /stg/review/application/views/maker/review.php(13): Kohana_Core::error_handler(4096, 'Object of class...', '/stg/review/app...', 13, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template.php(54): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-04 11:11:27 --- ERROR: ErrorException [ 8 ]: Undefined index: device ~ APPPATH/classes/model/tpl/device.php [ 9 ]
2013-10-04 11:11:27 --- STRACE: ErrorException [ 8 ]: Undefined index: device ~ APPPATH/classes/model/tpl/device.php [ 9 ]
--
#0 /stg/review/application/classes/model/tpl/device.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 9, Array)
#1 /stg/review/application/classes/controller/home/home.php(6): Model_Tpl_Device::choose_tpl()
#2 [internal function]: Controller_Home_Home->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-04 11:14:08 --- ERROR: View_Exception [ 0 ]: The requested view home/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 11:14:08 --- STRACE: View_Exception [ 0 ]: The requested view home/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('home/home')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('home/home', NULL)
#2 /stg/review/application/classes/controller/home/home.php(8): Kohana_View::factory('home/home')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-04 11:17:05 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: pc ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-10-04 11:17:05 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: pc ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /stg/review/application/classes/controller/home/home.php(11): Kohana_View->__get('pc')
#1 [internal function]: Controller_Home_Home->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-04 11:17:26 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: pc ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-10-04 11:17:26 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: pc ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /stg/review/application/classes/controller/home/home.php(11): Kohana_View->__get('pc')
#1 [internal function]: Controller_Home_Home->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-04 11:17:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-04 11:17:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-04 11:18:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-04 11:18:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-04 11:18:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-04 11:18:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-04 11:18:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-04 11:18:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-04 11:18:47 --- ERROR: View_Exception [ 0 ]: The requested view fp/home/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 11:18:47 --- STRACE: View_Exception [ 0 ]: The requested view fp/home/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('fp/home/home')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('fp/home/home', NULL)
#2 /stg/review/application/classes/controller/home/home.php(11): Kohana_View::factory('fp/home/home')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-04 17:24:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Tpl_Device::file_tail() ~ APPPATH/classes/controller/home/home.php [ 6 ]
2013-10-04 17:24:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Tpl_Device::file_tail() ~ APPPATH/classes/controller/home/home.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-04 17:25:30 --- ERROR: View_Exception [ 0 ]: The requested view template_ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 17:25:30 --- STRACE: View_Exception [ 0 ]: The requested view template_ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('template_')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('template_', NULL)
#2 /stg/review/application/classes/controller/home/home.php(7): Kohana_View::factory('template_')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-04 17:25:32 --- ERROR: View_Exception [ 0 ]: The requested view template_ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 17:25:32 --- STRACE: View_Exception [ 0 ]: The requested view template_ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('template_')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('template_', NULL)
#2 /stg/review/application/classes/controller/home/home.php(7): Kohana_View::factory('template_')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-04 17:46:36 --- ERROR: ErrorException [ 2048 ]: Accessing static property Request::$user_agent as non static ~ APPPATH/classes/controller/home/home.php [ 12 ]
2013-10-04 17:46:36 --- STRACE: ErrorException [ 2048 ]: Accessing static property Request::$user_agent as non static ~ APPPATH/classes/controller/home/home.php [ 12 ]
--
#0 /stg/review/application/classes/controller/home/home.php(12): Kohana_Core::error_handler(2048, 'Accessing stati...', '/stg/review/app...', 12, Array)
#1 [internal function]: Controller_Home_Home->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-04 17:49:26 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in /stg/review/application/classes/controller/home/home.php on line 13 and defined ~ SYSPATH/classes/kohana/request.php [ 755 ]
2013-10-04 17:49:26 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_Request::__construct(), called in /stg/review/application/classes/controller/home/home.php on line 13 and defined ~ SYSPATH/classes/kohana/request.php [ 755 ]
--
#0 /stg/review/system/classes/kohana/request.php(755): Kohana_Core::error_handler(2, 'Missing argumen...', '/stg/review/sys...', 755, Array)
#1 /stg/review/application/classes/controller/home/home.php(13): Kohana_Request->__construct()
#2 [internal function]: Controller_Home_Home->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-04 17:50:30 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'user_agent' ~ APPPATH/classes/controller/home/home.php [ 14 ]
2013-10-04 17:50:30 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'user_agent' ~ APPPATH/classes/controller/home/home.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-04 18:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-04 18:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-04 19:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-04 19:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-04 19:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-04 19:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-04 19:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-04 19:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-04 19:26:56 --- ERROR: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review.php [ 5 ]
2013-10-04 19:26:56 --- STRACE: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-04 19:29:53 --- ERROR: View_Exception [ 0 ]: The requested view tpl/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 19:29:53 --- STRACE: View_Exception [ 0 ]: The requested view tpl/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('tpl/template')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('tpl/template', NULL)
#2 /stg/review/application/classes/model/access/session.php(9): Kohana_View::factory('tpl/template')
#3 /stg/review/application/classes/controller/maker/review.php(5): Model_Access_Session::maker_chk()
#4 [internal function]: Controller_Maker_Review->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-04 19:31:08 --- ERROR: View_Exception [ 0 ]: The requested view tpl/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 19:31:08 --- STRACE: View_Exception [ 0 ]: The requested view tpl/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('tpl/template')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('tpl/template', NULL)
#2 /stg/review/application/classes/model/access/session.php(9): Kohana_View::factory('tpl/template')
#3 /stg/review/application/classes/controller/maker/review.php(5): Model_Access_Session::maker_chk()
#4 [internal function]: Controller_Maker_Review->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-04 19:31:24 --- ERROR: View_Exception [ 0 ]: The requested view tpl/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 19:31:24 --- STRACE: View_Exception [ 0 ]: The requested view tpl/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('tpl/template')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('tpl/template', NULL)
#2 /stg/review/application/classes/model/access/session.php(9): Kohana_View::factory('tpl/template')
#3 /stg/review/application/classes/controller/maker/review.php(6): Model_Access_Session::maker_chk()
#4 [internal function]: Controller_Maker_Review->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-04 19:38:35 --- ERROR: View_Exception [ 0 ]: The requested view tpl/err could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 19:38:35 --- STRACE: View_Exception [ 0 ]: The requested view tpl/err could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('tpl/err')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('tpl/err', NULL)
#2 /stg/review/application/classes/model/access/session.php(12): Kohana_View::factory('tpl/err')
#3 /stg/review/application/classes/controller/maker/review.php(6): Model_Access_Session::maker_chk()
#4 [internal function]: Controller_Maker_Review->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-04 19:39:30 --- ERROR: View_Exception [ 0 ]: The requested view tpl/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-04 19:39:30 --- STRACE: View_Exception [ 0 ]: The requested view tpl/template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('tpl/template')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('tpl/template', NULL)
#2 /stg/review/application/classes/controller/maker/reviewlist.php(6): Kohana_View::factory('tpl/template')
#3 [internal function]: Controller_Maker_ReviewList->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_ReviewList))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-04 19:41:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/reviewlist.php [ 12 ]
2013-10-04 19:41:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/reviewlist.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-04 19:42:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review.php [ 10 ]
2013-10-04 19:42:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-04 19:42:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/classes/controller/maker/review.php [ 25 ]
2013-10-04 19:42:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/classes/controller/maker/review.php [ 25 ]
--
#0 /stg/review/application/classes/controller/maker/review.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 25, Array)
#1 [internal function]: Controller_Maker_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-04 21:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-04 21:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-04 21:04:05 --- ERROR: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
2013-10-04 21:04:05 --- STRACE: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-04 23:42:53 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-04 23:42:53 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /stg/review/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /stg/review/modules/database/classes/kohana/session/database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /stg/review/system/classes/kohana/session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /stg/review/application/classes/controller/home/home.php(13): Kohana_Session::instance('database')
#4 [internal function]: Controller_Home_Home->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-04 23:43:34 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-04 23:43:34 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /stg/review/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /stg/review/modules/database/classes/kohana/session/database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /stg/review/system/classes/kohana/session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /stg/review/application/classes/controller/home/home.php(13): Kohana_Session::instance('database')
#4 [internal function]: Controller_Home_Home->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-04 23:44:29 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-04 23:44:29 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /stg/review/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /stg/review/modules/database/classes/kohana/session/database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /stg/review/system/classes/kohana/session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /stg/review/application/classes/controller/home/home.php(13): Kohana_Session::instance('database')
#4 [internal function]: Controller_Home_Home->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}