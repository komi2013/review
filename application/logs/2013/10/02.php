<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-02 09:55:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-02 09:55:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-02 09:55:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ">https:/review-stg.komahana.info/ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-02 09:55:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ">https:/review-stg.komahana.info/ ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-02 12:06:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Before_Access::tpl_maker_right() ~ APPPATH/classes/controller/maker/reviewlist.php [ 8 ]
2013-10-02 12:06:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Before_Access::tpl_maker_right() ~ APPPATH/classes/controller/maker/reviewlist.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 12:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-02 12:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-02 12:17:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Before_Access::pv_u_id_chk() ~ APPPATH/classes/controller/maker/reviewlist.php [ 8 ]
2013-10-02 12:17:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Before_Access::pv_u_id_chk() ~ APPPATH/classes/controller/maker/reviewlist.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 12:18:30 --- ERROR: ErrorException [ 2048 ]: Non-static method Model_Before_Access::pv_u_id_chk() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/maker/reviewlist.php [ 8 ]
2013-10-02 12:18:30 --- STRACE: ErrorException [ 2048 ]: Non-static method Model_Before_Access::pv_u_id_chk() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/maker/reviewlist.php [ 8 ]
--
#0 /stg/review/application/classes/controller/maker/reviewlist.php(8): Kohana_Core::error_handler(2048, 'Non-static meth...', '/stg/review/app...', 8, Array)
#1 [internal function]: Controller_Maker_ReviewList->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_ReviewList))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-02 12:41:54 --- ERROR: ErrorException [ 1 ]: Class 'Str' not found ~ APPPATH/views/tpl/csrf.php [ 2 ]
2013-10-02 12:41:54 --- STRACE: ErrorException [ 1 ]: Class 'Str' not found ~ APPPATH/views/tpl/csrf.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 15:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mypage/newin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-02 15:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mypage/newin was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-02 15:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL maker/new3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2013-10-02 15:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL maker/new3 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-02 15:48:19 --- ERROR: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/before/access.php [ 18 ]
2013-10-02 15:48:19 --- STRACE: ErrorException [ 8 ]: Undefined index: csrf ~ APPPATH/classes/model/before/access.php [ 18 ]
--
#0 /stg/review/application/classes/model/before/access.php(18): Kohana_Core::error_handler(8, 'Undefined index...', '/stg/review/app...', 18, Array)
#1 /stg/review/application/classes/controller/maker/new3.php(6): Model_Before_Access::csrf_chk()
#2 [internal function]: Controller_Maker_New3->action_index()
#3 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_New3))
#4 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /stg/review/index.php(109): Kohana_Request->execute()
#7 {main}
2013-10-02 15:52:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: csrf ~ APPPATH/views/maker/review_list.php [ 8 ]
2013-10-02 15:52:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: csrf ~ APPPATH/views/maker/review_list.php [ 8 ]
--
#0 /stg/review/application/views/maker/review_list.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 8, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template.php(54): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_ReviewList))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-02 15:53:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Session_Native::$u_id ~ APPPATH/classes/controller/maker/new3.php [ 8 ]
2013-10-02 15:53:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Session_Native::$u_id ~ APPPATH/classes/controller/maker/new3.php [ 8 ]
--
#0 /stg/review/application/classes/controller/maker/new3.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 8, Array)
#1 [internal function]: Controller_Maker_New3->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_New3))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-02 15:58:38 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in /stg/review/application/classes/model/dtenquete.php on line 23 and defined ~ MODPATH/database/classes/kohana/db.php [ 42 ]
2013-10-02 15:58:38 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in /stg/review/application/classes/model/dtenquete.php on line 23 and defined ~ MODPATH/database/classes/kohana/db.php [ 42 ]
--
#0 /stg/review/modules/database/classes/kohana/db.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', '/stg/review/mod...', 42, Array)
#1 /stg/review/application/classes/model/dtenquete.php(23): Kohana_DB::query('select nextval(...')
#2 /stg/review/application/classes/controller/maker/new3.php(19): Model_DtEnquete->get_new_id()
#3 [internal function]: Controller_Maker_New3->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_New3))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-02 16:00:51 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in /stg/review/application/classes/model/dtenquete.php on line 23 and defined ~ MODPATH/database/classes/kohana/db.php [ 42 ]
2013-10-02 16:00:51 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in /stg/review/application/classes/model/dtenquete.php on line 23 and defined ~ MODPATH/database/classes/kohana/db.php [ 42 ]
--
#0 /stg/review/modules/database/classes/kohana/db.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', '/stg/review/mod...', 42, Array)
#1 /stg/review/application/classes/model/dtenquete.php(23): Kohana_DB::query('select nextval(...')
#2 /stg/review/application/classes/controller/maker/new3.php(19): Model_DtEnquete->get_new_id()
#3 [internal function]: Controller_Maker_New3->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_New3))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-02 16:01:50 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in /stg/review/application/classes/model/dtenquete.php on line 23 and defined ~ MODPATH/database/classes/kohana/db.php [ 42 ]
2013-10-02 16:01:50 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_DB::query(), called in /stg/review/application/classes/model/dtenquete.php on line 23 and defined ~ MODPATH/database/classes/kohana/db.php [ 42 ]
--
#0 /stg/review/modules/database/classes/kohana/db.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', '/stg/review/mod...', 42, Array)
#1 /stg/review/application/classes/model/dtenquete.php(23): Kohana_DB::query('select nextval(...')
#2 /stg/review/application/classes/controller/maker/new3.php(19): Model_DtEnquete->get_new_id()
#3 [internal function]: Controller_Maker_New3->action_index()
#4 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_New3))
#5 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /stg/review/index.php(109): Kohana_Request->execute()
#8 {main}
2013-10-02 16:06:36 --- ERROR: Database_Exception [ 0 ]: ERROR:  duplicate key value violates unique constraint "enquete_pkey1"
 [ INSERT INTO "dt_enquete" ("id", "u_id", "end_txt", "status", "title") VALUES (1, '38', '回答ありがとうございました', 0, 'レビュー') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
2013-10-02 16:06:36 --- STRACE: Database_Exception [ 0 ]: ERROR:  duplicate key value violates unique constraint "enquete_pkey1"
 [ INSERT INTO "dt_enquete" ("id", "u_id", "end_txt", "status", "title") VALUES (1, '38', '回答ありがとうございました', 0, 'レビュー') ] ~ MODPATH/database/classes/kohana/database/postgresql.php [ 194 ]
--
#0 /stg/review/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO "dt...', false, Array)
#1 /stg/review/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_PostgreSQL))
#2 /stg/review/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /stg/review/application/classes/controller/maker/new3.php(28): Kohana_ORM->save()
#4 [internal function]: Controller_Maker_New3->action_index()
#5 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_New3))
#6 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /stg/review/index.php(109): Kohana_Request->execute()
#9 {main}
2013-10-02 16:07:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Before_Access::enqu_chk() ~ APPPATH/classes/controller/maker/review.php [ 8 ]
2013-10-02 16:07:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Before_Access::enqu_chk() ~ APPPATH/classes/controller/maker/review.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 16:07:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Before_Access::enqu_chk() ~ APPPATH/classes/controller/maker/review.php [ 8 ]
2013-10-02 16:07:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Before_Access::enqu_chk() ~ APPPATH/classes/controller/maker/review.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 16:11:21 --- ERROR: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
2013-10-02 16:11:21 --- STRACE: ErrorException [ 1 ]: Class 'Controller_All' not found ~ APPPATH/classes/controller/mypage/reviewlist.php [ 2 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 16:12:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Maker_Review::$u_id ~ APPPATH/classes/controller/maker/review.php [ 32 ]
2013-10-02 16:12:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Maker_Review::$u_id ~ APPPATH/classes/controller/maker/review.php [ 32 ]
--
#0 /stg/review/application/classes/controller/maker/review.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 32, Array)
#1 [internal function]: Controller_Maker_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-02 16:16:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: enqu ~ APPPATH/classes/controller/maker/review.php [ 40 ]
2013-10-02 16:16:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: enqu ~ APPPATH/classes/controller/maker/review.php [ 40 ]
--
#0 /stg/review/application/classes/controller/maker/review.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 40, Array)
#1 [internal function]: Controller_Maker_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-02 16:16:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_DtQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-02 16:16:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_DtQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 16:17:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_DtQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-02 16:17:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_DtQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 16:18:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_DtQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2013-10-02 16:18:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_DtQuestion' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-10-02 16:25:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: enqu ~ APPPATH/classes/controller/maker/review.php [ 101 ]
2013-10-02 16:25:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: enqu ~ APPPATH/classes/controller/maker/review.php [ 101 ]
--
#0 /stg/review/application/classes/controller/maker/review.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 101, Array)
#1 [internal function]: Controller_Maker_Review->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-02 16:26:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/views/maker/review.php [ 27 ]
2013-10-02 16:26:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/views/maker/review.php [ 27 ]
--
#0 /stg/review/application/views/maker/review.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 27, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template.php(54): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-02 16:32:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-02 16:32:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-02 16:35:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/views/maker/review.php [ 79 ]
2013-10-02 16:35:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/views/maker/review.php [ 79 ]
--
#0 /stg/review/application/views/maker/review.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 79, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template.php(54): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-02 16:35:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/views/maker/review.php [ 79 ]
2013-10-02 16:35:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH/views/maker/review.php [ 79 ]
--
#0 /stg/review/application/views/maker/review.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/stg/review/app...', 79, Array)
#1 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#2 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#3 /stg/review/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /stg/review/application/views/tpl/template.php(54): Kohana_View->__toString()
#5 /stg/review/system/classes/kohana/view.php(61): include('/stg/review/app...')
#6 /stg/review/system/classes/kohana/view.php(343): Kohana_View::capture('/stg/review/app...', Array)
#7 /stg/review/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /stg/review/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Maker_Review))
#10 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /stg/review/index.php(109): Kohana_Request->execute()
#13 {main}
2013-10-02 18:32:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Maker_Review4::$enqu_id ~ APPPATH/classes/controller/maker/review4.php [ 33 ]
2013-10-02 18:32:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Maker_Review4::$enqu_id ~ APPPATH/classes/controller/maker/review4.php [ 33 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 33, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}
2013-10-02 18:34:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Maker_Review4::$enqu_id ~ APPPATH/classes/controller/maker/review4.php [ 33 ]
2013-10-02 18:34:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Maker_Review4::$enqu_id ~ APPPATH/classes/controller/maker/review4.php [ 33 ]
--
#0 /stg/review/application/classes/controller/maker/review4.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/stg/review/app...', 33, Array)
#1 [internal function]: Controller_Maker_Review4->action_index()
#2 /stg/review/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Maker_Review4))
#3 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /stg/review/index.php(109): Kohana_Request->execute()
#6 {main}