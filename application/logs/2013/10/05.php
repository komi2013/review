<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-05 00:05:35 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-05 00:05:35 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2013-10-05 00:05:53 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-05 00:05:53 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2013-10-05 00:06:35 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-05 00:06:35 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2013-10-05 00:06:59 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-05 00:06:59 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
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
2013-10-05 05:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-05 05:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-05 05:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-05 05:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-05 05:38:40 --- ERROR: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
2013-10-05 05:38:40 --- STRACE: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 07:13:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/model/access/session.php [ 4 ]
2013-10-05 07:13:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH/classes/model/access/session.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 07:14:30 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-05 07:14:30 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /stg/review/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /stg/review/system/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /stg/review/application/classes/model/access/session.php(9): Kohana_Session::instance()
#3 /stg/review/application/classes/controller/home/home.php(6): Model_Access_Session::maker_chk()
#4 [internal function]: Controller_Home_Home->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-05 07:15:05 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/access/session.php [ 12 ]
2013-10-05 07:15:05 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/access/session.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 07:15:08 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/access/session.php [ 12 ]
2013-10-05 07:15:08 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/access/session.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 07:21:04 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-05 07:21:04 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /stg/review/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /stg/review/system/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /stg/review/application/classes/model/access/session.php(9): Kohana_Session::instance()
#3 /stg/review/application/classes/controller/home/home.php(6): Model_Access_Session::maker_chk()
#4 [internal function]: Controller_Home_Home->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-05 07:23:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/home/home.php [ 14 ]
2013-10-05 07:23:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/home/home.php [ 14 ]
--
#0 /stg/review/application/classes/controller/home/home.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 14, Array)
#1 [internal function]: Controller_Home_Home->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 07:25:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/home/home.php [ 14 ]
2013-10-05 07:25:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/home/home.php [ 14 ]
--
#0 /stg/review/application/classes/controller/home/home.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 14, Array)
#1 [internal function]: Controller_Home_Home->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 08:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-05 08:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-05 10:14:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/home/home.php [ 14 ]
2013-10-05 10:14:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/home/home.php [ 14 ]
--
#0 /stg/review/application/classes/controller/home/home.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 14, Array)
#1 [internal function]: Controller_Home_Home->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 10:23:46 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-05 10:23:46 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /stg/review/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /stg/review/system/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /stg/review/application/classes/controller/home/home.php(12): Kohana_Session::instance()
#3 [internal function]: Controller_Home_Home->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home_Home))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-05 10:41:45 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2013-10-05 10:41:45 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /stg/review/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /stg/review/system/classes/kohana/session.php(54): Kohana_Session->__construct(Array, NULL)
#2 /stg/review/application/classes/model/dtusr.php(35): Kohana_Session::instance()
#3 /stg/review/application/classes/controller/usr/fb3.php(33): Model_DtUsr->reg_login()
#4 [internal function]: Controller_Usr_Fb3->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Usr_Fb3))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-05 10:47:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/classes/controller/maker/review.php [ 25 ]
2013-10-05 10:47:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/classes/controller/maker/review.php [ 25 ]
--
#0 /stg/review/application/classes/controller/maker/review.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 25, Array)
#1 [internal function]: Controller_Maker_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 11:01:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/classes/controller/maker/review.php [ 23 ]
2013-10-05 11:01:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/classes/controller/maker/review.php [ 23 ]
--
#0 /stg/review/application/classes/controller/maker/review.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 23, Array)
#1 [internal function]: Controller_Maker_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 11:02:34 --- ERROR: View_Exception [ 0 ]: The requested view tpl/csrf could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-05 11:02:34 --- STRACE: View_Exception [ 0 ]: The requested view tpl/csrf could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('tpl/csrf')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('tpl/csrf', NULL)
#2 /stg/review/application/views/maker/review.php(16): Kohana_View::factory('tpl/csrf')
#3 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#4 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#5 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /stg/review/application/views/template_pc.php(34): Kohana_View->__toString()
#7 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#8 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#9 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#12 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /stg/review/index.php(109): Kohana_Request->execute()
#15 {main}
2013-10-05 11:03:53 --- ERROR: View_Exception [ 0 ]: The requested view tpl/csrf_pc could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-05 11:03:53 --- STRACE: View_Exception [ 0 ]: The requested view tpl/csrf_pc could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('tpl/csrf_pc')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('tpl/csrf_pc', NULL)
#2 /stg/review/application/views/maker/review.php(16): Kohana_View::factory('tpl/csrf_pc')
#3 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#4 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#5 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /stg/review/application/views/template_pc.php(34): Kohana_View->__toString()
#7 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#8 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#9 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#12 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /stg/review/index.php(109): Kohana_Request->execute()
#15 {main}
2013-10-05 11:33:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr_qu_id ~ APPPATH/classes/controller/maker/review.php [ 34 ]
2013-10-05 11:33:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr_qu_id ~ APPPATH/classes/controller/maker/review.php [ 34 ]
--
#0 /stg/review/application/classes/controller/maker/review.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 34, Array)
#1 [internal function]: Controller_Maker_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 11:34:32 --- ERROR: Database_Exception [ 0 ]: ERROR:  syntax error at or near ")"
LINE 1: ....* FROM "dt_qucho" AS "dtqucho" WHERE "qu_id" IN () ORDER BY...
                                                             ^
 [ SELECT "dtqucho".* FROM "dt_qucho" AS "dtqucho" WHERE "qu_id" IN () ORDER BY "id" ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-05 11:34:32 --- STRACE: Database_Exception [ 0 ]: ERROR:  syntax error at or near ")"
LINE 1: ....* FROM "dt_qucho" AS "dtqucho" WHERE "qu_id" IN () ORDER BY...
                                                             ^
 [ SELECT "dtqucho".* FROM "dt_qucho" AS "dtqucho" WHERE "qu_id" IN () ORDER BY "id" ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "dtqucho...', 'Model_DtQucho', Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /stg/review/application/classes/controller/maker/review.php(34): Kohana_ORM->find_all()
#4 [internal function]: Controller_Maker_Review->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-05 11:35:02 --- ERROR: Kohana_Exception [ 0 ]: The q_num property does not exist in the Model_DtQucho class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2013-10-05 11:35:02 --- STRACE: Kohana_Exception [ 0 ]: The q_num property does not exist in the Model_DtQucho class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /stg/review/application/classes/controller/maker/review.php(38): Kohana_ORM->__get('q_num')
#1 [internal function]: Controller_Maker_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 11:57:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_PostgreSQL_Result::loaded() ~ APPPATH/classes/controller/maker/review.php [ 27 ]
2013-10-05 11:57:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_PostgreSQL_Result::loaded() ~ APPPATH/classes/controller/maker/review.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:05:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_WHILE ~ APPPATH/views/maker/review.php [ 30 ]
2013-10-05 12:05:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_WHILE ~ APPPATH/views/maker/review.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:05:38 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131860481 bytes) ~ APPPATH/views/maker/review.php [ 33 ]
2013-10-05 12:05:38 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131860481 bytes) ~ APPPATH/views/maker/review.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:06:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/maker/review.php [ 43 ]
2013-10-05 12:06:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH/views/maker/review.php [ 43 ]
--
#0 /stg/review/application/views/maker/review.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 43, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:11:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/views/maker/review.php [ 43 ]
2013-10-05 12:11:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/views/maker/review.php [ 43 ]
--
#0 /stg/review/application/views/maker/review.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 43, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:12:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/maker/review.php [ 43 ]
2013-10-05 12:12:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/maker/review.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:12:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/maker/review.php [ 43 ]
2013-10-05 12:12:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/maker/review.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:12:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/maker/review.php [ 43 ]
2013-10-05 12:12:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/maker/review.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:13:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/views/maker/review.php [ 43 ]
2013-10-05 12:13:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/views/maker/review.php [ 43 ]
--
#0 /stg/review/application/views/maker/review.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 43, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:13:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/views/maker/review.php [ 43 ]
2013-10-05 12:13:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: arr ~ APPPATH/views/maker/review.php [ 43 ]
--
#0 /stg/review/application/views/maker/review.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 43, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:17:47 --- ERROR: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review4.php [ 5 ]
2013-10-05 12:17:47 --- STRACE: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review4.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:18:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review4.php [ 5 ]
2013-10-05 12:18:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review4.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:26:57 --- ERROR: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review4.php [ 5 ]
2013-10-05 12:26:57 --- STRACE: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/review4.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 12:29:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: qu_arr ~ APPPATH/views/maker/review.php [ 8 ]
2013-10-05 12:29:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: qu_arr ~ APPPATH/views/maker/review.php [ 8 ]
--
#0 /stg/review/application/views/maker/review.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 8, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:32:15 --- ERROR: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 11 ]
2013-10-05 12:32:15 --- STRACE: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 11 ]
--
#0 /stg/review/application/views/maker/review.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 11, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:33:11 --- ERROR: ErrorException [ 8 ]: Use of undefined constant arr_qu - assumed 'arr_qu' ~ APPPATH/views/maker/review.php [ 3 ]
2013-10-05 12:33:11 --- STRACE: ErrorException [ 8 ]: Use of undefined constant arr_qu - assumed 'arr_qu' ~ APPPATH/views/maker/review.php [ 3 ]
--
#0 /stg/review/application/views/maker/review.php(3): Kohana_Core::error_handler(8, 'Use of undefine...', '/stg/review/app...', 3, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:33:25 --- ERROR: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 12 ]
2013-10-05 12:33:25 --- STRACE: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 12 ]
--
#0 /stg/review/application/views/maker/review.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 12, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:34:02 --- ERROR: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 12 ]
2013-10-05 12:34:02 --- STRACE: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 12 ]
--
#0 /stg/review/application/views/maker/review.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 12, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:36:07 --- ERROR: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 12 ]
2013-10-05 12:36:07 --- STRACE: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 12 ]
--
#0 /stg/review/application/views/maker/review.php(12): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 12, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-05 12:42:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/controller/maker/review4.php [ 73 ]
2013-10-05 12:42:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/controller/maker/review4.php [ 73 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 13:23:43 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:23:43 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:25:27 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:25:27 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:26:06 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:26:06 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:27:57 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:27:57 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:28:38 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:28:38 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:29:25 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:29:25 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:29:48 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:29:48 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:32:11 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:32:11 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:32:22 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:32:22 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:33:06 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:33:06 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:34:10 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:34:10 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:34:30 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:34:30 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:43:52 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:43:52 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:46:49 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:46:49 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:47:57 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:47:57 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:48:29 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:48:29 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 13:48:42 --- ERROR: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
2013-10-05 13:48:42 --- STRACE: ErrorException [ 8 ]: Undefined index: q_txt ~ APPPATH/classes/controller/maker/review4.php [ 31 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 31, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-05 14:16:31 --- ERROR: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
2013-10-05 14:16:31 --- STRACE: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-05 19:52:38 --- ERROR: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
2013-10-05 19:52:38 --- STRACE: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}