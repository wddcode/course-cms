<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-21 22:14:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL course-cms/02-view/www_root was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 22:14:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL course-cms/02-view/www_root was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:14:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL course-cms/02-view/www_root was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 22:14:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL course-cms/02-view/www_root was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL course-cms/02-view/www_root was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 22:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL course-cms/02-view/www_root was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 22:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 22:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:19:17 --- ERROR: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 22:19:17 --- STRACE: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('static/home')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('static/home', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/application/classes/controller/static.php(8): Kohana_View::factory('static/home')
#3 [internal function]: Controller_Static->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 22:19:36 --- ERROR: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 22:19:36 --- STRACE: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('static/home')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('static/home', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/application/classes/controller/static.php(8): Kohana_View::factory('static/home')
#3 [internal function]: Controller_Static->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 22:19:37 --- ERROR: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 22:19:37 --- STRACE: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('static/home')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('static/home', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/application/classes/controller/static.php(8): Kohana_View::factory('static/home')
#3 [internal function]: Controller_Static->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 22:19:38 --- ERROR: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 22:19:38 --- STRACE: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('static/home')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('static/home', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/application/classes/controller/static.php(8): Kohana_View::factory('static/home')
#3 [internal function]: Controller_Static->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 22:20:18 --- ERROR: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 22:20:18 --- STRACE: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('static/home')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('static/home', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/application/classes/controller/static.php(8): Kohana_View::factory('static/home')
#3 [internal function]: Controller_Static->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 22:20:18 --- ERROR: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 22:20:18 --- STRACE: View_Exception [ 0 ]: The requested view static/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('static/home')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('static/home', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/application/classes/controller/static.php(8): Kohana_View::factory('static/home')
#3 [internal function]: Controller_Static->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 22:20:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH/classes/controller/static.php [ 10 ]
2012-05-21 22:20:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH/classes/controller/static.php [ 10 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/02-view/application/classes/controller/static.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/ohrstrom...', 10, Array)
#1 [internal function]: Controller_Static->action_index()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-21 22:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 22:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:27:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-21 22:27:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-21 22:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL static/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-21 22:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL static/contact was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 22:30:20 --- ERROR: View_Exception [ 0 ]: The requested view base could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 22:30:20 --- STRACE: View_Exception [ 0 ]: The requested view base could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('base')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('base', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/02-view/application/classes/controller/template.php(13): Kohana_View::factory('base')
#3 [internal function]: Controller_Template->before()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/02-view/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 22:43:49 --- ERROR: View_Exception [ 0 ]: The requested view base could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 22:43:49 --- STRACE: View_Exception [ 0 ]: The requested view base could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('base')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('base', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/03-template/application/classes/controller/template.php(14): Kohana_View::factory('base')
#3 [internal function]: Controller_Template->before()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 23:02:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana_Config::get() ~ APPPATH/classes/controller/static.php [ 11 ]
2012-05-21 23:02:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana_Config::get() ~ APPPATH/classes/controller/static.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-21 23:02:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/static.php [ 13 ]
2012-05-21 23:02:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/static.php [ 13 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/application/classes/controller/static.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/ohrstrom...', 13, Array)
#1 [internal function]: Controller_Static->action_index()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-21 23:03:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH/classes/controller/static.php [ 13 ]
2012-05-21 23:03:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH/classes/controller/static.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-21 23:05:46 --- ERROR: View_Exception [ 0 ]: The requested view skeleton/head could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 23:05:46 --- STRACE: View_Exception [ 0 ]: The requested view skeleton/head could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('skeleton/head')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('skeleton/head', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/03-template/application/classes/controller/website.php(22): Kohana_View::factory('skeleton/head')
#3 [internal function]: Controller_Website->before()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 23:06:02 --- ERROR: View_Exception [ 0 ]: The requested view skeleton/head could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 23:06:02 --- STRACE: View_Exception [ 0 ]: The requested view skeleton/head could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('skeleton/head')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('skeleton/head', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/03-template/application/classes/controller/website.php(22): Kohana_View::factory('skeleton/head')
#3 [internal function]: Controller_Website->before()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 23:06:43 --- ERROR: View_Exception [ 0 ]: The requested view skeleton/menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 23:06:43 --- STRACE: View_Exception [ 0 ]: The requested view skeleton/menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('skeleton/menu')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('skeleton/menu', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/03-template/application/classes/controller/website.php(25): Kohana_View::factory('skeleton/menu')
#3 [internal function]: Controller_Website->before()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 23:06:44 --- ERROR: View_Exception [ 0 ]: The requested view skeleton/menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 23:06:44 --- STRACE: View_Exception [ 0 ]: The requested view skeleton/menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('skeleton/menu')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('skeleton/menu', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/03-template/application/classes/controller/website.php(25): Kohana_View::factory('skeleton/menu')
#3 [internal function]: Controller_Website->before()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 23:06:45 --- ERROR: View_Exception [ 0 ]: The requested view skeleton/menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-21 23:06:45 --- STRACE: View_Exception [ 0 ]: The requested view skeleton/menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('skeleton/menu')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('skeleton/menu', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/03-template/application/classes/controller/website.php(25): Kohana_View::factory('skeleton/menu')
#3 [internal function]: Controller_Website->before()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Static))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-21 23:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/bootstrap/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/bootstrap/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/base.site.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/base.site.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:08:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:08:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/bootstrap/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/bootstrap/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/base.site.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/base.site.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/screen.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/base.site.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/base.site.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap-responsive.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/jquery.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/lib/bootstrap/bootstrap.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:09:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/bootstrap/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-21 23:09:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/lib/bootstrap/bootstrap.min.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/03-template/www_root/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-21 23:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-21 23:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-21 23:35:20 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/controller/page.php [ 21 ]
2012-05-21 23:35:20 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/controller/page.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-21 23:35:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dummy' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-21 23:35:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dummy' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-21 23:35:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dummy' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-21 23:35:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dummy' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-21 23:36:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dummy' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-21 23:36:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dummy' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-21 23:38:28 --- ERROR: ErrorException [ 1 ]: Class 'Model_Dummy' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-05-21 23:38:28 --- STRACE: ErrorException [ 1 ]: Class 'Model_Dummy' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-21 23:39:06 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-21 23:39:06 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('dummies')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/model/dummy.php(63): Kohana_ORM->__construct(NULL)
#7 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(37): Model_Dummy->__construct(NULL)
#8 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(21): Kohana_ORM::factory('dummy')
#9 [internal function]: Controller_Page->action_test()
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-21 23:39:08 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-21 23:39:08 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('dummies')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/model/dummy.php(63): Kohana_ORM->__construct(NULL)
#7 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(37): Model_Dummy->__construct(NULL)
#8 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(21): Kohana_ORM::factory('dummy')
#9 [internal function]: Controller_Page->action_test()
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-21 23:39:09 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-21 23:39:09 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('dummies')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/model/dummy.php(63): Kohana_ORM->__construct(NULL)
#7 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(37): Model_Dummy->__construct(NULL)
#8 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(21): Kohana_ORM::factory('dummy')
#9 [internal function]: Controller_Page->action_test()
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-21 23:39:09 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-05-21 23:39:09 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/MAMP/tmp/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('dummies')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/model/dummy.php(63): Kohana_ORM->__construct(NULL)
#7 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(37): Model_Dummy->__construct(NULL)
#8 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(21): Kohana_ORM::factory('dummy')
#9 [internal function]: Controller_Page->action_test()
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#11 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#14 {main}
2012-05-21 23:39:27 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'course-cms-04' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-05-21 23:39:27 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'course-cms-04' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('course-cms-04')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('dummies')
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/model/dummy.php(63): Kohana_ORM->__construct(NULL)
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(37): Model_Dummy->__construct(NULL)
#9 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(21): Kohana_ORM::factory('dummy')
#10 [internal function]: Controller_Page->action_test()
#11 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#15 {main}
2012-05-21 23:40:06 --- ERROR: Database_Exception [ 1146 ]: Table 'course-cms-04.dummies' doesn't exist [ SHOW FULL COLUMNS FROM `dummies` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-21 23:40:06 --- STRACE: Database_Exception [ 1146 ]: Table 'course-cms-04.dummies' doesn't exist [ SHOW FULL COLUMNS FROM `dummies` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('dummies')
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/model/dummy.php(63): Kohana_ORM->__construct(NULL)
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(37): Model_Dummy->__construct(NULL)
#7 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(21): Kohana_ORM::factory('dummy')
#8 [internal function]: Controller_Page->action_test()
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#13 {main}
2012-05-21 23:57:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH/classes/controller/page.php [ 36 ]
2012-05-21 23:57:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH/classes/controller/page.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-21 23:58:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_id ~ APPPATH/classes/controller/page.php [ 38 ]
2012-05-21 23:58:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_id ~ APPPATH/classes/controller/page.php [ 38 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/ohrstrom...', 38, Array)
#1 [internal function]: Controller_Page->action_test_tpl()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-21 23:58:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_id ~ APPPATH/classes/controller/page.php [ 38 ]
2012-05-21 23:58:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_id ~ APPPATH/classes/controller/page.php [ 38 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/ohrstrom...', 38, Array)
#1 [internal function]: Controller_Page->action_test_tpl()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#6 {main}