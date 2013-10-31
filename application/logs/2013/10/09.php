<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-09 02:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 02:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 02:20:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 02:20:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 04:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://www.google.co.jp ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 04:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://www.google.co.jp ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 04:06:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 44 ]
2013-10-09 04:06:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 44 ]
--
#0 /stg/review/application/bootstrap.php(44): Kohana_Core::error_handler(8, 'Undefined offse...', '/stg/review/app...', 44, Array)
#1 /stg/review/index.php(102): require('/stg/review/app...')
#2 {main}
2013-10-09 06:21:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 06:21:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 07:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-09 07:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-09 07:43:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-09 07:43:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-09 07:43:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 07:43:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 10:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 10:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 10:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 10:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 11:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-09 11:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-09 12:04:02 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/encrypt/session.php [ 7 ]
2013-10-09 12:04:02 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/encrypt/session.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-09 12:05:31 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/encrypt/session.php [ 7 ]
2013-10-09 12:05:31 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/encrypt/session.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-09 12:05:33 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/encrypt/session.php [ 7 ]
2013-10-09 12:05:33 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/encrypt/session.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-09 12:05:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-09 12:05:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-09 12:05:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: json_data ~ APPPATH/classes/model/encrypt/session.php [ 8 ]
2013-10-09 12:05:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: json_data ~ APPPATH/classes/model/encrypt/session.php [ 8 ]
--
#0 /stg/review/application/classes/model/encrypt/session.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 8, Array)
#1 /stg/review/application/classes/controller/answer/start5.php(30): Model_Encrypt_Session->encode(Array)
#2 [internal function]: Controller_Answer_Start5->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Start5))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-09 12:06:09 --- ERROR: ErrorException [ 2 ]: mcrypt_encrypt() expects parameter 3 to be string, array given ~ SYSPATH/classes/kohana/encrypt.php [ 171 ]
2013-10-09 12:06:09 --- STRACE: ErrorException [ 2 ]: mcrypt_encrypt() expects parameter 3 to be string, array given ~ SYSPATH/classes/kohana/encrypt.php [ 171 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mcrypt_encrypt(...', '/stg/review/sys...', 171, Array)
#1 /stg/review/system/classes/kohana/encrypt.php(171): mcrypt_encrypt('rijndael-128', 'test', Array, 'nofb', '?nt4yZb?????l?x...')
#2 /stg/review/application/classes/model/encrypt/session.php(8): Kohana_Encrypt->encode(Array)
#3 /stg/review/application/classes/controller/answer/start5.php(30): Model_Encrypt_Session->encode(Array)
#4 [internal function]: Controller_Answer_Start5->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Start5))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-09 13:02:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 13:02:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 13:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-09 13:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-09 16:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-09 16:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-09 17:14:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 17:14:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 17:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 17:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 18:59:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 18:59:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 19:06:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-09 19:06:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-09 19:33:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-09 19:33:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL status was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-09 20:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-09 20:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}