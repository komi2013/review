<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-08 12:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-08 12:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-08 12:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 12:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 12:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answer/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 12:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answer/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 12:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answer/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 12:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answer/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 12:49:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/classes/controller/answer/ing.php [ 8 ]
2013-10-08 12:49:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/classes/controller/answer/ing.php [ 8 ]
--
#0 /stg/review/application/classes/controller/answer/ing.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 8, Array)
#1 [internal function]: Controller_Answer_Ing->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-08 12:51:10 --- ERROR: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ... "t1_dtquestion" WHERE "enqu_id" = '152' ORDER BY "q_num" DE...
                                                             ^
 [ SELECT "t1_dtquestion".* FROM "dt_question" AS "t1_dtquestion" WHERE "enqu_id" = '152' ORDER BY "q_num" DESC ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-08 12:51:10 --- STRACE: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ... "t1_dtquestion" WHERE "enqu_id" = '152' ORDER BY "q_num" DE...
                                                             ^
 [ SELECT "t1_dtquestion".* FROM "dt_question" AS "t1_dtquestion" WHERE "enqu_id" = '152' ORDER BY "q_num" DESC ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "t1_dtqu...', 'Model_T1_DtQues...', Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /stg/review/application/classes/controller/answer/ing.php(10): Kohana_ORM->find_all()
#4 [internal function]: Controller_Answer_Ing->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-08 12:55:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_T1_DtAncho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-08 12:55:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_T1_DtAncho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-08 13:02:11 --- ERROR: ErrorException [ 2048 ]: Declaration of Model_T1_DtAncho::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH/classes/model/t1/dtancho.php [ 48 ]
2013-10-08 13:02:11 --- STRACE: ErrorException [ 2048 ]: Declaration of Model_T1_DtAncho::save() should be compatible with that of Kohana_ORM::save() ~ APPPATH/classes/model/t1/dtancho.php [ 48 ]
--
#0 /stg/review/system/classes/kohana/core.php(496): Kohana_Core::error_handler(2048, 'Declaration of ...', '/stg/review/app...', 48, Array)
#1 /stg/review/system/classes/kohana/core.php(496): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_T1_DtAnch...')
#3 /stg/review/modules/orm/classes/kohana/orm.php(37): spl_autoload_call('Model_T1_DtAnch...')
#4 /stg/review/application/classes/controller/answer/ing.php(31): Kohana_ORM::factory('T1_DtAncho')
#5 [internal function]: Controller_Answer_Ing->action_index()
#6 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#7 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /stg/review/index.php(109): Kohana_Request->execute()
#10 {main}
2013-10-08 13:04:36 --- ERROR: Database_Exception [ 0 ]: ERROR:  relation "ancho" does not exist
LINE 1: SELECT "t1_dtancho".* FROM "ancho" AS "t1_dtancho" WHERE "qu...
                                   ^
 [ SELECT "t1_dtancho".* FROM "ancho" AS "t1_dtancho" WHERE "qu_id" = '328' AND "u_id" = '39' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-08 13:04:36 --- STRACE: Database_Exception [ 0 ]: ERROR:  relation "ancho" does not exist
LINE 1: SELECT "t1_dtancho".* FROM "ancho" AS "t1_dtancho" WHERE "qu...
                                   ^
 [ SELECT "t1_dtancho".* FROM "ancho" AS "t1_dtancho" WHERE "qu_id" = '328' AND "u_id" = '39' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "t1_dtan...', false, Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /stg/review/application/classes/controller/answer/ing.php(35): Kohana_ORM->find()
#4 [internal function]: Controller_Answer_Ing->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-08 13:05:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_T1_DtAntxt' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-08 13:05:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_T1_DtAntxt' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-08 13:06:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH/classes/controller/answer/ing.php [ 29 ]
2013-10-08 13:06:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH/classes/controller/answer/ing.php [ 29 ]
--
#0 /stg/review/application/classes/controller/answer/ing.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 29, Array)
#1 [internal function]: Controller_Answer_Ing->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-08 13:06:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 13:06:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 13:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answer/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 13:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answer/start was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 13:07:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH/classes/controller/answer/ing.php [ 29 ]
2013-10-08 13:07:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH/classes/controller/answer/ing.php [ 29 ]
--
#0 /stg/review/application/classes/controller/answer/ing.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 29, Array)
#1 [internal function]: Controller_Answer_Ing->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-08 13:09:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH/classes/controller/answer/ing.php [ 30 ]
2013-10-08 13:09:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH/classes/controller/answer/ing.php [ 30 ]
--
#0 /stg/review/application/classes/controller/answer/ing.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 30, Array)
#1 [internal function]: Controller_Answer_Ing->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-08 13:10:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/answer/end.php [ 12 ]
2013-10-08 13:10:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/answer/end.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-08 13:15:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Answer_End::$session ~ APPPATH/classes/controller/answer/end.php [ 8 ]
2013-10-08 13:15:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Answer_End::$session ~ APPPATH/classes/controller/answer/end.php [ 8 ]
--
#0 /stg/review/application/classes/controller/answer/end.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 8, Array)
#1 [internal function]: Controller_Answer_End->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_End))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-08 13:17:03 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/answer/end.php [ 16 ]
2013-10-08 13:17:03 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/answer/end.php [ 16 ]
--
#0 /stg/review/application/classes/controller/answer/end.php(16): Kohana_Core::error_handler(2048, 'Only variables ...', '/stg/review/app...', 16, Array)
#1 [internal function]: Controller_Answer_End->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_End))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-08 13:23:47 --- ERROR: Database_Exception [ 0 ]: ERROR:  syntax error at or near "FROM"
LINE 1: SELECT FROM sm_u_ans WHERE enqu_id = '152' AND u_id = '39'
               ^
 [ SELECT FROM sm_u_ans WHERE enqu_id = '152' AND u_id = '39' ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-08 13:23:47 --- STRACE: Database_Exception [ 0 ]: ERROR:  syntax error at or near "FROM"
LINE 1: SELECT FROM sm_u_ans WHERE enqu_id = '152' AND u_id = '39'
               ^
 [ SELECT FROM sm_u_ans WHERE enqu_id = '152' AND u_id = '39' ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(4, 'SELECT FROM sm_...', false, Array)
#1 /stg/review/application/classes/controller/answer/end.php(23): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Answer_End->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_End))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-08 13:24:10 --- ERROR: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH/classes/controller/answer/end.php [ 24 ]
2013-10-08 13:24:10 --- STRACE: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH/classes/controller/answer/end.php [ 24 ]
--
#0 /stg/review/application/classes/controller/answer/end.php(24): Kohana_Core::error_handler(8, 'Use of undefine...', '/stg/review/app...', 24, Array)
#1 [internal function]: Controller_Answer_End->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_End))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-08 13:24:43 --- ERROR: View_Exception [ 0 ]: The requested view answer/end_pc could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-08 13:24:43 --- STRACE: View_Exception [ 0 ]: The requested view answer/end_pc could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('answer/end_pc')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('answer/end_pc', NULL)
#2 /stg/review/application/classes/controller/answer/end.php(31): Kohana_View::factory('answer/end_pc')
#3 [internal function]: Controller_Answer_End->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_End))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-08 13:42:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/views/answer/end_pc.php [ 17 ]
2013-10-08 13:42:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: enqu_id ~ APPPATH/views/answer/end_pc.php [ 17 ]
--
#0 /stg/review/application/views/answer/end_pc.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 17, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_pc.php(36): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Answer_End))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-08 14:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-08 14:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-08 14:07:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-08 14:07:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-08 14:07:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_T1_DtUsr::get_new_id() ~ APPPATH/classes/controller/answer/start3.php [ 23 ]
2013-10-08 14:07:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_T1_DtUsr::get_new_id() ~ APPPATH/classes/controller/answer/start3.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-08 14:09:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_T1_DtUsr::get_new_id() ~ APPPATH/classes/controller/answer/start3.php [ 23 ]
2013-10-08 14:09:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_T1_DtUsr::get_new_id() ~ APPPATH/classes/controller/answer/start3.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-08 14:09:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_T1_DtUsr::get_new_id() ~ APPPATH/classes/controller/answer/start3.php [ 23 ]
2013-10-08 14:09:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_T1_DtUsr::get_new_id() ~ APPPATH/classes/controller/answer/start3.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-08 14:10:21 --- ERROR: View_Exception [ 0 ]: The requested view answer/qu_cho_pc could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-08 14:10:21 --- STRACE: View_Exception [ 0 ]: The requested view answer/qu_cho_pc could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('answer/qu_cho_p...')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('answer/qu_cho_p...', NULL)
#2 /stg/review/application/classes/controller/answer/ing.php(46): Kohana_View::factory('answer/qu_cho_p...')
#3 [internal function]: Controller_Answer_Ing->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-08 14:28:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH/classes/controller/answer/ing.php [ 30 ]
2013-10-08 14:28:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH/classes/controller/answer/ing.php [ 30 ]
--
#0 /stg/review/application/classes/controller/answer/ing.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 30, Array)
#1 [internal function]: Controller_Answer_Ing->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-08 14:29:22 --- ERROR: Kohana_Exception [ 0 ]: The q_txt property does not exist in the Model_T1_DtQuestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2013-10-08 14:29:22 --- STRACE: Kohana_Exception [ 0 ]: The q_txt property does not exist in the Model_T1_DtQuestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /stg/review/application/views/answer/ing_cho_pc.php(1): Kohana_ORM->__get('q_txt')
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_pc.php(36): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-08 14:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/answer/ing.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-08 14:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/answer/ing.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-08 14:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/answer/ing.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-08 14:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/answer/ing.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-08 14:32:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/answer/ing.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-08 14:32:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/answer/ing.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-08 15:55:22 --- ERROR: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
2013-10-08 15:55:22 --- STRACE: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
--
#0 /stg/review/application/classes/model/access/arg.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 48, Array)
#1 /stg/review/application/classes/controller/answer/choice4.php(5): Model_Access_Arg::post_csrf_chk_json()
#2 [internal function]: Controller_Answer_Choice4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Choice4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-08 15:55:39 --- ERROR: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
2013-10-08 15:55:39 --- STRACE: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
--
#0 /stg/review/application/classes/model/access/arg.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 48, Array)
#1 /stg/review/application/classes/controller/answer/choice4.php(5): Model_Access_Arg::post_csrf_chk_json()
#2 [internal function]: Controller_Answer_Choice4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Choice4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-08 15:55:40 --- ERROR: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
2013-10-08 15:55:40 --- STRACE: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
--
#0 /stg/review/application/classes/model/access/arg.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 48, Array)
#1 /stg/review/application/classes/controller/answer/choice4.php(5): Model_Access_Arg::post_csrf_chk_json()
#2 [internal function]: Controller_Answer_Choice4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Choice4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-08 15:56:01 --- ERROR: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
2013-10-08 15:56:01 --- STRACE: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
--
#0 /stg/review/application/classes/model/access/arg.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 48, Array)
#1 /stg/review/application/classes/controller/answer/choice4.php(5): Model_Access_Arg::post_csrf_chk_json()
#2 [internal function]: Controller_Answer_Choice4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Choice4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-08 15:56:21 --- ERROR: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
2013-10-08 15:56:21 --- STRACE: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
--
#0 /stg/review/application/classes/model/access/arg.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 48, Array)
#1 /stg/review/application/classes/controller/answer/choice4.php(5): Model_Access_Arg::post_csrf_chk_json()
#2 [internal function]: Controller_Answer_Choice4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Answer_Choice4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-08 16:06:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ancho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-08 16:06:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ancho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-08 16:06:31 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ancho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-08 16:06:31 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ancho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-08 16:07:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: enquete ~ APPPATH/views/answer/ing_txt_pc.php [ 2 ]
2013-10-08 16:07:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: enquete ~ APPPATH/views/answer/ing_txt_pc.php [ 2 ]
--
#0 /stg/review/application/views/answer/ing_txt_pc.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 2, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_pc.php(36): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Answer_Ing))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-08 18:59:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: host ~ APPPATH/views/maker/review_list.php [ 39 ]
2013-10-08 18:59:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: host ~ APPPATH/views/maker/review_list.php [ 39 ]
--
#0 /stg/review/application/views/maker/review_list.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 39, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_pc.php(33): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_ReviewList))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-08 19:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answer/ingfp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 19:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answer/ingfp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 19:07:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/tpl/template_fp.php [ 32 ]
2013-10-08 19:07:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/tpl/template_fp.php [ 32 ]
--
#0 /stg/review/application/views/tpl/template_fp.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 32, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home_Test))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-08 19:07:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/tpl/template_pc.php [ 33 ]
2013-10-08 19:07:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/views/tpl/template_pc.php [ 33 ]
--
#0 /stg/review/application/views/tpl/template_pc.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 33, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home_Test))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-08 19:10:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answer/ingfp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 19:10:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answer/ingfp was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 20:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 20:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 20:37:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 20:37:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 20:50:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 20:50:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-08 22:42:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-08 22:42:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}