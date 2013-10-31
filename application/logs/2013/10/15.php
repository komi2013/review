<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-15 00:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-15 00:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-15 01:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 01:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL manager/html was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 01:34:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 01:34:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 01:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-15 01:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-15 02:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 02:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 03:26:28 --- ERROR: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/views/home/home_pc.php [ 13 ]
2013-10-15 03:26:28 --- STRACE: ErrorException [ 8 ]: Undefined index: HTTP_HOST ~ APPPATH/views/home/home_pc.php [ 13 ]
--
#0 /stg/review/application/views/home/home_pc.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 13, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_pc.php(33): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home_Home))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-15 04:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 04:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 06:09:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL invoker/EJBInvokerServlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 06:09:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL invoker/EJBInvokerServlet was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 06:34:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 06:34:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 06:34:11 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 44 ]
2013-10-15 06:34:11 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 44 ]
--
#0 /stg/review/application/bootstrap.php(44): Kohana_Core::error_handler(8, 'Undefined offse...', '/stg/review/app...', 44, Array)
#1 /stg/review/index.php(102): require('/stg/review/app...')
#2 {main}
2013-10-15 10:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-15 10:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-15 14:46:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-15 14:46:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-15 14:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-15 14:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-15 15:18:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 15:18:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 15:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-15 15:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-15 17:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-15 17:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-15 18:15:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-15 18:15:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-15 18:18:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/controller/answer/start3.php [ 28 ]
2013-10-15 18:18:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH/classes/controller/answer/start3.php [ 28 ]
--
#0 /stg/review/application/classes/controller/answer/start3.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 28, Array)
#1 [internal function]: Controller_Answer_Start3->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Start3))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-15 18:19:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: u_id ~ APPPATH/classes/controller/answer/start3.php [ 31 ]
2013-10-15 18:19:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: u_id ~ APPPATH/classes/controller/answer/start3.php [ 31 ]
--
#0 /stg/review/application/classes/controller/answer/start3.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Answer_Start3->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Start3))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-15 18:24:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/question.php [ 33 ]
2013-10-15 18:24:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/question.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-15 18:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 18:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 18:27:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/question.php [ 33 ]
2013-10-15 18:27:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/question.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-15 18:27:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/question.php [ 33 ]
2013-10-15 18:27:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/question.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-15 18:27:46 --- ERROR: Kohana_Exception [ 0 ]: The q_txt property does not exist in the Model_V1_DtQuestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2013-10-15 18:27:46 --- STRACE: Kohana_Exception [ 0 ]: The q_txt property does not exist in the Model_V1_DtQuestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /stg/review/application/views/answer/ing_cho_fp.php(1): Kohana_ORM->__get('q_txt')
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_fp.php(32): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Answer_IngFp))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-15 19:04:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/choiceid.php [ 38 ]
2013-10-15 19:04:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/choiceid.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-15 19:05:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/choiceid.php [ 38 ]
2013-10-15 19:05:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/model/check/choiceid.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-15 19:06:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_T1_DtQucho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-15 19:06:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_T1_DtQucho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-15 19:11:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: enquete ~ APPPATH/views/answer/ing_txt_fp.php [ 2 ]
2013-10-15 19:11:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: enquete ~ APPPATH/views/answer/ing_txt_fp.php [ 2 ]
--
#0 /stg/review/application/views/answer/ing_txt_fp.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 2, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_fp.php(32): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Answer_IngFp))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-15 19:14:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-15 19:14:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-15 19:17:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: err ~ APPPATH/views/answer/ing_txt_fp.php [ 6 ]
2013-10-15 19:17:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: err ~ APPPATH/views/answer/ing_txt_fp.php [ 6 ]
--
#0 /stg/review/application/views/answer/ing_txt_fp.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 6, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_fp.php(32): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Answer_IngFp))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-15 19:33:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/answer/ingfp.php [ 87 ]
2013-10-15 19:33:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/answer/ingfp.php [ 87 ]
--
#0 /stg/review/application/classes/controller/answer/ingfp.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 87, Array)
#1 [internal function]: Controller_Answer_IngFp->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_IngFp))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}