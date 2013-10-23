<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-30 10:54:48 --- ERROR: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-08-30 10:54:48 --- STRACE: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('five/home/')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('five/home/', NULL)
#2 /stg/review/application/classes/controller/home/home.php(7): Kohana_View::factory('five/home/')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-30 10:55:07 --- ERROR: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-08-30 10:55:07 --- STRACE: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('five/home/')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('five/home/', NULL)
#2 /stg/review/application/classes/controller/home/home.php(7): Kohana_View::factory('five/home/')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-30 11:14:50 --- ERROR: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-08-30 11:14:50 --- STRACE: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('five/home/')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('five/home/', NULL)
#2 /stg/review/application/classes/controller/home/home.php(7): Kohana_View::factory('five/home/')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-30 11:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-30 11:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-30 11:30:48 --- ERROR: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-08-30 11:30:48 --- STRACE: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('five/home/')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('five/home/', NULL)
#2 /stg/review/application/classes/controller/home/home.php(7): Kohana_View::factory('five/home/')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-08-30 11:30:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-30 11:30:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-30 11:30:50 --- ERROR: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-08-30 11:30:50 --- STRACE: View_Exception [ 0 ]: The requested view five/home/ could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('five/home/')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('five/home/', NULL)
#2 /stg/review/application/classes/controller/home/home.php(7): Kohana_View::factory('five/home/')
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}