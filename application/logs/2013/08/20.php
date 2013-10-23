<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-08-20 10:46:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/all.php [ 22 ]
2013-08-20 10:46:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/all.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-08-20 10:46:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-20 10:46:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-20 10:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-08-20 10:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-08-20 10:48:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Mypage_ReviewList::$enqu_id ~ APPPATH/classes/controller/mypage/reviewlist.php [ 9 ]
2013-08-20 10:48:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Mypage_ReviewList::$enqu_id ~ APPPATH/classes/controller/mypage/reviewlist.php [ 9 ]
--
#0 /stg/review/application/classes/controller/mypage/reviewlist.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 9, Array)
#1 [internal function]: Controller_Mypage_ReviewList->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mypage_ReviewList))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-20 10:52:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Mypage_ReviewList::$enqu_id ~ APPPATH/classes/controller/mypage/reviewlist.php [ 22 ]
2013-08-20 10:52:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Mypage_ReviewList::$enqu_id ~ APPPATH/classes/controller/mypage/reviewlist.php [ 22 ]
--
#0 /stg/review/application/classes/controller/mypage/reviewlist.php(22): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 22, Array)
#1 [internal function]: Controller_Mypage_ReviewList->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mypage_ReviewList))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-20 10:58:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: pr_tpl ~ APPPATH/views/five/template.php [ 82 ]
2013-08-20 10:58:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: pr_tpl ~ APPPATH/views/five/template.php [ 82 ]
--
#0 /stg/review/application/views/five/template.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 82, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Mypage_ReviewList))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-08-20 11:09:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Mypage_Answer::$enqu_id ~ APPPATH/classes/controller/mypage/answer.php [ 10 ]
2013-08-20 11:09:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Mypage_Answer::$enqu_id ~ APPPATH/classes/controller/mypage/answer.php [ 10 ]
--
#0 /stg/review/application/classes/controller/mypage/answer.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 10, Array)
#1 [internal function]: Controller_Mypage_Answer->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mypage_Answer))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-20 11:21:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: pager_id ~ APPPATH/views/mypage/answer.php [ 24 ]
2013-08-20 11:21:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: pager_id ~ APPPATH/views/mypage/answer.php [ 24 ]
--
#0 /stg/review/application/views/mypage/answer.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 24, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl_1.php(78): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Mypage_Answer))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-08-20 11:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mypage/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-20 11:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mypage/new was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-20 11:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mypage/newin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-20 11:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mypage/newin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-20 11:36:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Mypage_Review::$enqu_id ~ APPPATH/classes/controller/mypage/review.php [ 9 ]
2013-08-20 11:36:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Mypage_Review::$enqu_id ~ APPPATH/classes/controller/mypage/review.php [ 9 ]
--
#0 /stg/review/application/classes/controller/mypage/review.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 9, Array)
#1 [internal function]: Controller_Mypage_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Mypage_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-08-20 11:44:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/views/mypage/review.php [ 24 ]
2013-08-20 11:44:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/views/mypage/review.php [ 24 ]
--
#0 /stg/review/application/views/mypage/review.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 24, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl_1.php(78): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Mypage_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-08-20 11:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mypage/reviewin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-20 11:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mypage/reviewin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-20 11:56:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mypage/reviewin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-20 11:56:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mypage/reviewin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-08-20 11:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mypage/reviewin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-08-20 11:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mypage/reviewin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}