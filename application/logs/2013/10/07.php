<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-07 00:05:19 --- ERROR: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 13 ]
2013-10-07 00:05:19 --- STRACE: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 13 ]
--
#0 /stg/review/application/views/maker/review.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 13, Array)
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
2013-10-07 09:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-07 09:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-07 09:49:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-07 09:49:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-07 09:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-07 09:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-07 09:50:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-07 09:50:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-07 09:50:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-07 09:50:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: test.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-07 11:35:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_T1_DtUsr' not found ~ APPPATH/classes/controller/usr/fb3.php [ 28 ]
2013-10-07 11:35:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_T1_DtUsr' not found ~ APPPATH/classes/controller/usr/fb3.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 11:35:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/fb3/'.'http:/graph.facebook.com/'.$id.'/picture'.' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-07 11:35:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: usr/fb3/'.'http:/graph.facebook.com/'.$id.'/picture'.' ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-07 11:37:26 --- ERROR: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...on" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num"
                                                                ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num" ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-07 11:37:26 --- STRACE: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...on" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num"
                                                                ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num" ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "dtquest...', 'Model_DtQuestio...', Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /stg/review/application/classes/controller/maker/review.php(25): Kohana_ORM->find_all()
#4 [internal function]: Controller_Maker_Review->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-07 11:40:23 --- ERROR: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...on" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num"
                                                                ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num" ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-07 11:40:23 --- STRACE: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...on" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num"
                                                                ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num" ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "dtquest...', 'Model_DtQuestio...', Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /stg/review/application/classes/controller/maker/review.php(25): Kohana_ORM->find_all()
#4 [internal function]: Controller_Maker_Review->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-07 11:40:31 --- ERROR: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...on" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num"
                                                                ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num" ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-07 11:40:31 --- STRACE: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...on" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num"
                                                                ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '154' ORDER BY "q_num" ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "dtquest...', 'Model_DtQuestio...', Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /stg/review/application/classes/controller/maker/review.php(25): Kohana_ORM->find_all()
#4 [internal function]: Controller_Maker_Review->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-07 11:42:05 --- ERROR: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 13 ]
2013-10-07 11:42:05 --- STRACE: ErrorException [ 8 ]: Undefined index: cho ~ APPPATH/views/maker/review.php [ 13 ]
--
#0 /stg/review/application/views/maker/review.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 13, Array)
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
2013-10-07 12:01:55 --- ERROR: ErrorException [ 8 ]: Undefined index:  database ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2013-10-07 12:01:55 --- STRACE: ErrorException [ 8 ]: Undefined index:  database ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /stg/review/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/mod...', 65, Array)
#1 /stg/review/application/classes/controller/maker/review4.php(23): Kohana_Database::instance('database')
#2 [internal function]: Controller_Maker_Review4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 12:02:04 --- ERROR: ErrorException [ 8 ]: Undefined index:  database ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2013-10-07 12:02:04 --- STRACE: ErrorException [ 8 ]: Undefined index:  database ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /stg/review/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/mod...', 65, Array)
#1 /stg/review/application/classes/controller/maker/review4.php(23): Kohana_Database::instance('database')
#2 [internal function]: Controller_Maker_Review4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 12:03:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  database ~ MODPATH/database/classes/kohana/database.php [ 65 ]
2013-10-07 12:03:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  database ~ MODPATH/database/classes/kohana/database.php [ 65 ]
--
#0 /stg/review/modules/database/classes/kohana/database.php(65): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/mod...', 65, Array)
#1 /stg/review/application/classes/controller/maker/review4.php(23): Kohana_Database::instance('database')
#2 [internal function]: Controller_Maker_Review4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 12:04:00 --- ERROR: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...tion" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = ...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = '3' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-07 12:04:00 --- STRACE: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...tion" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = ...
                                                             ^
 [ SELECT "dtquestion".* FROM "dt_question" AS "dtquestion" WHERE "enqu_id" = '153' AND "q_num" = '3' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
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
2013-10-07 12:04:00 --- ERROR: Database_Exception [ 0 ]: ERROR:  current transaction is aborted, commands ignored until end of transaction block
 [ UPDATE "sessions" SET "last_active" = 1381115040, "contents" = 'G65u4O+K/bnrDaMRQ8wZi41kZJiedr+86XM7olFkr/Og8MyhtaxpzJ79I6P171I/+NlfG7qqqkfe3Oqe2A14SNaptOb9Uclgm4K6l65rKPioK8Ps5CujVbg/zoT8KrtzFMRnWpATwltcM37NMzNa67V0pvHzSI/kOAPvM7A=' WHERE "session_id" = '5252059ecc46f2-37604911' ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-07 12:46:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_DtEnquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-07 12:46:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_DtEnquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 12:48:11 --- ERROR: ErrorException [ 1 ]: Class 'Model_DtEnquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-07 12:48:11 --- STRACE: ErrorException [ 1 ]: Class 'Model_DtEnquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 12:49:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_DtEnquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-07 12:49:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_DtEnquete' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 13:00:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_DtQucho' not found ~ APPPATH/classes/controller/maker/review4.php [ 69 ]
2013-10-07 13:00:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_DtQucho' not found ~ APPPATH/classes/controller/maker/review4.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 13:01:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_DtQucho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-07 13:01:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_DtQucho' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 13:04:49 --- ERROR: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...n" AS "t1_dtquestion" WHERE "enqu_id" = '153' AND "q_num" = ...
                                                             ^
 [ SELECT "t1_dtquestion".* FROM "dt_question" AS "t1_dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 5 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-07 13:04:49 --- STRACE: Database_Exception [ 0 ]: ERROR:  column "q_num" does not exist
LINE 1: ...n" AS "t1_dtquestion" WHERE "enqu_id" = '153' AND "q_num" = ...
                                                             ^
 [ SELECT "t1_dtquestion".* FROM "dt_question" AS "t1_dtquestion" WHERE "enqu_id" = '153' AND "q_num" = 5 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "t1_dtqu...', false, Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /stg/review/application/classes/controller/maker/freetxt4.php(26): Kohana_ORM->find()
#4 [internal function]: Controller_Maker_Freetxt4->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Freetxt4))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-07 13:48:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: qu_id ~ APPPATH/classes/controller/maker/review4.php [ 73 ]
2013-10-07 13:48:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: qu_id ~ APPPATH/classes/controller/maker/review4.php [ 73 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(73): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 73, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-07 13:54:24 --- ERROR: Kohana_Exception [ 0 ]: The transaction property does not exist in the Model_T1_DtQuestion class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
2013-10-07 13:54:24 --- STRACE: Kohana_Exception [ 0 ]: The transaction property does not exist in the Model_T1_DtQuestion class ~ MODPATH/orm/classes/kohana/orm.php [ 681 ]
--
#0 /stg/review/modules/orm/classes/kohana/orm.php(634): Kohana_ORM->set('transaction', 1)
#1 /stg/review/application/classes/controller/maker/freetxt4.php(9): Kohana_ORM->__set('transaction', 1)
#2 [internal function]: Controller_Maker_Freetxt4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Freetxt4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 14:25:50 --- ERROR: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/model/t1/dtquestion.php [ 81 ]
2013-10-07 14:25:50 --- STRACE: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/model/t1/dtquestion.php [ 81 ]
--
#0 /stg/review/application/classes/model/t1/dtquestion.php(81): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 81, Array)
#1 /stg/review/application/classes/controller/maker/freetxt4.php(10): Model_T1_DtQuestion::review_post()
#2 [internal function]: Controller_Maker_Freetxt4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Freetxt4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 14:40:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: review ~ APPPATH/classes/model/t1/dtquestion.php [ 82 ]
2013-10-07 14:40:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: review ~ APPPATH/classes/model/t1/dtquestion.php [ 82 ]
--
#0 /stg/review/application/classes/model/t1/dtquestion.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 82, Array)
#1 /stg/review/application/classes/controller/maker/freetxt4.php(11): Model_T1_DtQuestion::review_post()
#2 [internal function]: Controller_Maker_Freetxt4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Freetxt4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 14:41:46 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/t1/dtquestion.php [ 86 ]
2013-10-07 14:41:46 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/t1/dtquestion.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 14:42:45 --- ERROR: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "質問jkl"
LINE 1: ...tquestion" WHERE "enqu_id" = '153' AND "number" = '質問jkl' ...
                                                             ^
 [ SELECT "t1_dtquestion".* FROM "dt_question" AS "t1_dtquestion" WHERE "enqu_id" = '153' AND "number" = '質問jkl' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-07 14:42:45 --- STRACE: Database_Exception [ 0 ]: ERROR:  invalid input syntax for integer: "質問jkl"
LINE 1: ...tquestion" WHERE "enqu_id" = '153' AND "number" = '質問jkl' ...
                                                             ^
 [ SELECT "t1_dtquestion".* FROM "dt_question" AS "t1_dtquestion" WHERE "enqu_id" = '153' AND "number" = '質問jkl' LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT "t1_dtqu...', false, Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /stg/review/application/classes/model/t1/dtquestion.php(87): Kohana_ORM->find()
#4 /stg/review/application/classes/controller/maker/review4.php(9): Model_T1_DtQuestion->review_post()
#5 [internal function]: Controller_Maker_Review4->action_index()
#6 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#7 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /stg/review/index.php(109): Kohana_Request->execute()
#10 {main}
2013-10-07 14:43:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: review ~ APPPATH/classes/model/t1/dtquestion.php [ 90 ]
2013-10-07 14:43:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: review ~ APPPATH/classes/model/t1/dtquestion.php [ 90 ]
--
#0 /stg/review/application/classes/model/t1/dtquestion.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 90, Array)
#1 /stg/review/application/classes/controller/maker/review4.php(9): Model_T1_DtQuestion->review_post()
#2 [internal function]: Controller_Maker_Review4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 14:46:22 --- ERROR: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/model/t1/dtquestion.php [ 102 ]
2013-10-07 14:46:22 --- STRACE: ErrorException [ 8 ]: Undefined index: q_num ~ APPPATH/classes/model/t1/dtquestion.php [ 102 ]
--
#0 /stg/review/application/classes/model/t1/dtquestion.php(102): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 102, Array)
#1 /stg/review/application/classes/controller/maker/freetxt4.php(11): Model_T1_DtQuestion->review_post()
#2 [internal function]: Controller_Maker_Freetxt4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Freetxt4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 15:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL maker/run was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-07 15:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL maker/run was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-07 16:12:26 --- ERROR: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/run.php [ 5 ]
2013-10-07 16:12:26 --- STRACE: ErrorException [ 1 ]: Class 'Model_Before_Access' not found ~ APPPATH/classes/controller/maker/run.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 16:12:59 --- ERROR: ErrorException [ 2048 ]: Non-static method Model_T1_DtEnquete::maker_enqu_get() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/maker/run.php [ 8 ]
2013-10-07 16:12:59 --- STRACE: ErrorException [ 2048 ]: Non-static method Model_T1_DtEnquete::maker_enqu_get() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/maker/run.php [ 8 ]
--
#0 /stg/review/application/classes/controller/maker/run.php(8): Kohana_Core::error_handler(2048, 'Non-static meth...', '/stg/review/app...', 8, Array)
#1 [internal function]: Controller_Maker_Run->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Run))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-07 16:13:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: enquete ~ APPPATH/classes/model/t1/dtenquete.php [ 56 ]
2013-10-07 16:13:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: enquete ~ APPPATH/classes/model/t1/dtenquete.php [ 56 ]
--
#0 /stg/review/application/classes/model/t1/dtenquete.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 56, Array)
#1 /stg/review/application/classes/controller/maker/run.php(8): Model_T1_DtEnquete::maker_enqu_get('153', Object(Session_Database))
#2 [internal function]: Controller_Maker_Run->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Run))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 16:14:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tpl_Basic' not found ~ APPPATH/classes/controller/maker/run.php [ 10 ]
2013-10-07 16:14:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tpl_Basic' not found ~ APPPATH/classes/controller/maker/run.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 16:15:18 --- ERROR: Kohana_Exception [ 0 ]: The end_txt property does not exist in the Model_T1_DtEnquete class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2013-10-07 16:15:18 --- STRACE: Kohana_Exception [ 0 ]: The end_txt property does not exist in the Model_T1_DtEnquete class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /stg/review/application/views/maker/run.php(18): Kohana_ORM->__get('end_txt')
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Run))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-07 16:48:57 --- ERROR: View_Exception [ 0 ]: The requested view csrf_pc could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2013-10-07 16:48:57 --- STRACE: View_Exception [ 0 ]: The requested view csrf_pc could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /stg/review/system/classes/kohana/view.php(137): Kohana_View->set_filename('csrf_pc')
#1 /stg/review/system/classes/kohana/view.php(30): Kohana_View->__construct('csrf_pc', NULL)
#2 /stg/review/application/views/maker/review.php(2): Kohana_View::factory('csrf_pc')
#3 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#4 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#5 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /stg/review/application/views/template_pc.php(35): Kohana_View->__toString()
#7 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#8 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#9 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#12 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /stg/review/index.php(109): Kohana_Request->execute()
#15 {main}
2013-10-07 18:01:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mypage/title3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-07 18:01:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mypage/title3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-07 18:02:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mypage/title4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-07 18:02:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mypage/title4 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-07 18:02:40 --- ERROR: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
2013-10-07 18:02:40 --- STRACE: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/access/arg.php [ 48 ]
--
#0 /stg/review/application/classes/model/access/arg.php(48): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 48, Array)
#1 /stg/review/application/classes/controller/maker/title4.php(5): Model_Access_Arg::post_csrf_chk_json()
#2 [internal function]: Controller_Maker_Title4->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Title4))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-07 18:04:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Access_Access' not found ~ APPPATH/classes/controller/maker/title4.php [ 7 ]
2013-10-07 18:04:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Access_Access' not found ~ APPPATH/classes/controller/maker/title4.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 18:07:49 --- ERROR: ErrorException [ 8 ]: Undefined index: end ~ APPPATH/classes/controller/maker/title4.php [ 15 ]
2013-10-07 18:07:49 --- STRACE: ErrorException [ 8 ]: Undefined index: end ~ APPPATH/classes/controller/maker/title4.php [ 15 ]
--
#0 /stg/review/application/classes/controller/maker/title4.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 15, Array)
#1 [internal function]: Controller_Maker_Title4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Title4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-07 18:50:36 --- ERROR: ErrorException [ 8 ]: Undefined index: chk ~ APPPATH/classes/controller/maker/title4.php [ 27 ]
2013-10-07 18:50:36 --- STRACE: ErrorException [ 8 ]: Undefined index: chk ~ APPPATH/classes/controller/maker/title4.php [ 27 ]
--
#0 /stg/review/application/classes/controller/maker/title4.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 27, Array)
#1 [internal function]: Controller_Maker_Title4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Title4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-07 18:51:30 --- ERROR: ErrorException [ 8 ]: Undefined index: chk ~ APPPATH/classes/controller/maker/title4.php [ 27 ]
2013-10-07 18:51:30 --- STRACE: ErrorException [ 8 ]: Undefined index: chk ~ APPPATH/classes/controller/maker/title4.php [ 27 ]
--
#0 /stg/review/application/classes/controller/maker/title4.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 27, Array)
#1 [internal function]: Controller_Maker_Title4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Title4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-07 20:16:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-07 20:16:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-07 21:28:36 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: csrf ~ SYSPATH/classes/kohana/view.php [ 171 ]
2013-10-07 21:28:36 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: csrf ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /stg/review/application/views/maker/run.php(3): Kohana_View->__get('csrf')
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template_pc.php(36): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Run))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-07 21:46:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Access_Access' not found ~ APPPATH/classes/controller/maker/run4.php [ 7 ]
2013-10-07 21:46:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Access_Access' not found ~ APPPATH/classes/controller/maker/run4.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-07 21:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL answer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-07 21:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL answer was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}