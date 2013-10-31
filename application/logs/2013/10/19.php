<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-10-19 07:11:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-19 07:11:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-19 07:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-19 07:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-19 10:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: updates/SoftwareVersionList.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-19 10:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: updates/SoftwareVersionList.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-19 14:32:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-19 14:32:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-19 18:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: epgrec/js/mdabasic.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-19 18:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: epgrec/js/mdabasic.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-19 18:47:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.library.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-19 18:47:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: js/jquery.library.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-19 19:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2013-10-19 19:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /stg/review/index.php(109): Kohana_Request->execute()
#1 {main}
2013-10-19 19:39:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-10-19 19:39:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /stg/review/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /stg/review/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /stg/review/index.php(109): Kohana_Request->execute()
#3 {main}
2013-10-19 19:39:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 44 ]
2013-10-19 19:39:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/bootstrap.php [ 44 ]
--
#0 /stg/review/application/bootstrap.php(44): Kohana_Core::error_handler(8, 'Undefined offse...', '/stg/review/app...', 44, Array)
#1 /stg/review/index.php(102): require('/stg/review/app...')
#2 {main}