<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-06 01:32:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-06 01:32:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-06 01:32:12 --- ERROR: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
2013-10-06 01:32:12 --- STRACE: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-06 08:58:11 --- ERROR: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
2013-10-06 08:58:11 --- STRACE: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-06 10:51:01 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 10:51:01 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 10:51:49 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 10:51:49 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 10:52:33 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 10:52:33 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 10:59:39 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 10:59:39 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:17:02 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:17:02 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:19:02 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:19:02 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:22:31 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:22:31 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:22:52 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:22:52 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:23:19 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:23:19 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:23:45 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:23:45 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:24:27 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:24:27 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:24:48 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:24:48 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:25:29 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:25:29 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:26:06 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:26:06 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:26:20 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:26:20 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:29:59 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:29:59 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:30:35 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:30:35 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:31:09 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:31:09 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:32:23 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:32:23 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:32:54 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:32:54 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:37:34 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:37:34 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:37:48 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:37:48 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:38:11 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:38:11 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:39:24 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:39:24 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:39:42 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:39:42 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:40:30 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:40:30 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:41:20 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:41:20 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:44:38 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:44:38 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:44:54 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:44:54 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:45:34 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:45:34 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:47:00 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:47:00 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:47:49 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:47:49 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:50:13 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:50:13 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:50:46 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 11:50:46 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:51:36 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 11:51:36 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:51:55 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 11:51:55 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:53:07 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:53:07 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:54:19 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:54:19 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:54:25 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 11:54:25 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:57:02 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:57:02 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:57:16 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:57:16 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 11:57:38 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 11:57:38 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 12:07:17 --- ERROR: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/controller/maker/review4.php [ 26 ]
2013-10-06 12:07:17 --- STRACE: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/controller/maker/review4.php [ 26 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 26, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 12:09:33 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 12:09:33 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 12:09:55 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 12:09:55 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 12:10:22 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 12:10:22 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 22:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-06 22:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-06 22:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-06 22:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-06 22:53:14 --- ERROR: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "クローム"
LINE 1: ...dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム'...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-06 22:53:14 --- STRACE: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "クローム"
LINE 1: ...dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム'...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "dtquest...', false, Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /stg/review/application/classes/controller/maker/review4.php(26): Kohana_ORM->find()
#4 [internal function]: Controller_Maker_Review4->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-06 22:53:21 --- ERROR: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "クローム"
LINE 1: ...dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム'...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-06 22:53:21 --- STRACE: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "クローム"
LINE 1: ...dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム'...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "dtquest...', false, Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /stg/review/application/classes/controller/maker/review4.php(26): Kohana_ORM->find()
#4 [internal function]: Controller_Maker_Review4->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-06 22:55:56 --- ERROR: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "クローム"
LINE 1: ...dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム'...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-06 22:55:56 --- STRACE: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "クローム"
LINE 1: ...dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム'...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "dtquest...', false, Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /stg/review/application/classes/controller/maker/review4.php(26): Kohana_ORM->find()
#4 [internal function]: Controller_Maker_Review4->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-06 22:56:35 --- ERROR: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "クローム"
LINE 1: ...dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム'...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-06 22:56:35 --- STRACE: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "クローム"
LINE 1: ...dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム'...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 'クローム' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "dtquest...', false, Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /stg/review/application/classes/controller/maker/review4.php(26): Kohana_ORM->find()
#4 [internal function]: Controller_Maker_Review4->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-06 22:57:16 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 22:57:16 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 22:58:17 --- ERROR: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
2013-10-06 22:58:17 --- STRACE: ErrorException [ 8 ]: Undefined index: choice ~ APPPATH/classes/controller/maker/review4.php [ 52 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(52): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 52, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 23:13:54 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 23:13:54 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 23:32:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-06 23:32:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-06 23:33:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-06 23:33:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-06 23:34:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-06 23:34:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-06 23:34:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-06 23:34:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-06 23:34:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-06 23:34:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Enquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-06 23:41:43 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 23:41:43 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 23:41:43 --- ERROR: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/controller/maker/freetxt4.php [ 26 ]
2013-10-06 23:41:43 --- STRACE: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/controller/maker/freetxt4.php [ 26 ]
--
#0 /stg/review/application/classes/controller/maker/freetxt4.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 26, Array)
#1 [internal function]: Controller_Maker_Freetxt4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Freetxt4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 23:46:46 --- ERROR: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/controller/maker/freetxt4.php [ 26 ]
2013-10-06 23:46:46 --- STRACE: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/controller/maker/freetxt4.php [ 26 ]
--
#0 /stg/review/application/classes/controller/maker/freetxt4.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 26, Array)
#1 [internal function]: Controller_Maker_Freetxt4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Freetxt4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 23:46:46 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-06 23:46:46 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-06 23:53:32 --- ERROR: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/controller/maker/freetxt4.php [ 26 ]
2013-10-06 23:53:32 --- STRACE: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/controller/maker/freetxt4.php [ 26 ]
--
#0 /stg/review/application/classes/controller/maker/freetxt4.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 26, Array)
#1 [internal function]: Controller_Maker_Freetxt4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Freetxt4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}