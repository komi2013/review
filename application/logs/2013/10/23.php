<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-23 03:42:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-23 03:42:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-23 07:56:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL web-console/Invoker was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-23 07:56:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL web-console/Invoker was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-23 08:33:29 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/views/home/home_pc.php [ 13 ]
2013-10-23 08:33:29 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/views/home/home_pc.php [ 13 ]
--
#0 /stg/review/application/views/home/home_pc.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 13, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_pc.php(17): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home_Home))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-23 08:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-23 08:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-23 09:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-23 09:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-23 09:52:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: contents ~ APPPATH/classes/controller/usr/twcallback3.php [ 39 ]
2013-10-23 09:52:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: contents ~ APPPATH/classes/controller/usr/twcallback3.php [ 39 ]
--
#0 /stg/review/application/classes/controller/usr/twcallback3.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 39, Array)
#1 [internal function]: Controller_Usr_Twcallback3->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Usr_Twcallback3))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}