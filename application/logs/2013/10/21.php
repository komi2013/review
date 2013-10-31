<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-21 00:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 00:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 01:55:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-21 01:55:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-21 01:55:48 --- ERROR: ErrorException [ 8 ]: Undefined index: code ~ APPPATH/classes/controller/usr/fb3.php [ 12 ]
2013-10-21 01:55:48 --- STRACE: ErrorException [ 8 ]: Undefined index: code ~ APPPATH/classes/controller/usr/fb3.php [ 12 ]
--
#0 /stg/review/application/classes/controller/usr/fb3.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 12, Array)
#1 [internal function]: Controller_Usr_Fb3->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Usr_Fb3))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-21 06:02:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-21 06:02:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-21 07:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 07:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 08:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://www.google.co.jp ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-21 08:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: http://www.google.co.jp ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-21 08:03:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 44 ]
2013-10-21 08:03:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 44 ]
--
#0 /stg/review/application/bootstrap.php(44): Kohana_Core::error_handler(8, 'Undefined offse...', '/stg/review/app...', 44, Array)
#1 /stg/review/index.php(102): require('/stg/review/app...')
#2 {main}
2013-10-21 09:04:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 09:04:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 11:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-21 11:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-21 11:42:38 --- ERROR: ErrorException [ 2 ]: Division by zero ~ APPPATH/views/statics/choice.php [ 14 ]
2013-10-21 11:42:38 --- STRACE: ErrorException [ 2 ]: Division by zero ~ APPPATH/views/statics/choice.php [ 14 ]
--
#0 /stg/review/application/views/statics/choice.php(14): Kohana_Core::error_handler(2, 'Division by zer...', '/stg/review/app...', 14, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_pc.php(17): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Statics_Choice))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-21 12:09:39 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/check/enqustatics.php [ 6 ]
2013-10-21 12:09:39 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/check/enqustatics.php [ 6 ]
--
#0 /stg/review/application/classes/model/check/enqustatics.php(6): Kohana_Core::error_handler(8, 'Trying to get p...', '/stg/review/app...', 6, Array)
#1 /stg/review/application/classes/controller/statics/txt.php(10): Model_Check_EnquStatics::tpl('154', Object(View))
#2 [internal function]: Controller_Statics_Txt->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Statics_Txt))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-21 12:12:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answerapi/start3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 12:12:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answerapi/start3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 12:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answerapi/start5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 12:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answerapi/start5 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 13:18:39 --- ERROR: ErrorException [ 2 ]: json_encode(): Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/answerapi/end5.php [ 37 ]
2013-10-21 13:18:39 --- STRACE: ErrorException [ 2 ]: json_encode(): Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/answerapi/end5.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode(): ...', '/stg/review/app...', 37, Array)
#1 /stg/review/application/classes/controller/answerapi/end5.php(37): json_encode('?"msg":"\u56de\...')
#2 [internal function]: Controller_AnswerApi_End5->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_AnswerApi_End5))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-21 13:19:04 --- ERROR: ErrorException [ 2 ]: json_encode(): Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/answerapi/end5.php [ 37 ]
2013-10-21 13:19:04 --- STRACE: ErrorException [ 2 ]: json_encode(): Invalid UTF-8 sequence in argument ~ APPPATH/classes/controller/answerapi/end5.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode(): ...', '/stg/review/app...', 37, Array)
#1 /stg/review/application/classes/controller/answerapi/end5.php(37): json_encode('?"msg":"\u56de\...')
#2 [internal function]: Controller_AnswerApi_End5->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_AnswerApi_End5))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-21 18:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-21 18:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-21 18:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ja was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 18:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ja was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 18:12:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asakusa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 18:12:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asakusa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 18:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 18:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL 1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 18:13:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 18:13:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 18:13:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/asakusa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 18:13:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/asakusa was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 18:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL en/home/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 18:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL en/home/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 20:17:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 20:17:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 23:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home/instgram was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-21 23:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home/instgram was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-21 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-21 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-21 23:50:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-21 23:50:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}