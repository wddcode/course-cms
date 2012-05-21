<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-22 00:15:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: dummay ~ APPPATH/classes/controller/page.php [ 72 ]
2012-05-22 00:15:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: dummay ~ APPPATH/classes/controller/page.php [ 72 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/ohrstrom...', 72, Array)
#1 [internal function]: Controller_Page->action_test_tpl()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:15:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: dummay ~ APPPATH/classes/controller/page.php [ 72 ]
2012-05-22 00:15:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: dummay ~ APPPATH/classes/controller/page.php [ 72 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/ohrstrom...', 72, Array)
#1 [internal function]: Controller_Page->action_test_tpl()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:33:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: item_id ~ APPPATH/classes/controller/page.php [ 123 ]
2012-05-22 00:33:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: item_id ~ APPPATH/classes/controller/page.php [ 123 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(123): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/ohrstrom...', 123, Array)
#1 [internal function]: Controller_Page->action_test_tpl_listing()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:33:26 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-05-22 00:33:26 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(127): Kohana_View->__get('menu')
#1 [internal function]: Controller_Page->action_test_tpl_listing()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:33:27 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-05-22 00:33:27 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/page.php(127): Kohana_View->__get('menu')
#1 [internal function]: Controller_Page->action_test_tpl_listing()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:34:13 --- ERROR: View_Exception [ 0 ]: The requested view skeleton/menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:34:13 --- STRACE: View_Exception [ 0 ]: The requested view skeleton/menu could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('skeleton/menu')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('skeleton/menu', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/04-model/application/classes/controller/website.php(25): Kohana_View::factory('skeleton/menu')
#3 [internal function]: Controller_Website->before()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/04-model/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:34:38 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/views/skeleton/menu.php [ 42 ]
2012-05-22 00:34:38 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/views/skeleton/menu.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-22 00:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-22 00:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-22 00:39:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-22 00:39:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-22 00:40:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-22 00:40:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-22 00:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-22 00:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-22 00:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-22 00:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-22 00:42:10 --- ERROR: Database_Exception [ 1146 ]: Table 'course-cms-04.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-05-22 00:42:10 --- STRACE: Database_Exception [ 1146 ]: Table 'course-cms-04.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/model/page.php(68): Kohana_ORM->__construct(NULL)
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(37): Model_Page->__construct(NULL)
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(61): Kohana_ORM::factory('page')
#8 [internal function]: Controller_Page->action_index()
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#13 {main}
2012-05-22 00:42:29 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'course-cms-09' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
2012-05-22 00:42:29 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'course-cms-09' ~ MODPATH/database/classes/kohana/database/mysql.php [ 108 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(75): Kohana_Database_MySQL->_select_db('course-cms-09')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/model/page.php(68): Kohana_ORM->__construct(NULL)
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/orm/classes/kohana/orm.php(37): Model_Page->__construct(NULL)
#9 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(61): Kohana_ORM::factory('page')
#10 [internal function]: Controller_Page->action_index()
#11 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#12 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#15 {main}
2012-05-22 00:44:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
2012-05-22 00:44:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/ohrstrom...', 16, Array)
#1 [internal function]: Controller_Admin->before()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:44:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
2012-05-22 00:44:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/ohrstrom...', 16, Array)
#1 [internal function]: Controller_Admin->before()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:44:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
2012-05-22 00:44:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/ohrstrom...', 16, Array)
#1 [internal function]: Controller_Admin->before()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:44:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
2012-05-22 00:44:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/ohrstrom...', 16, Array)
#1 [internal function]: Controller_Admin->before()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:44:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
2012-05-22 00:44:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/ohrstrom...', 16, Array)
#1 [internal function]: Controller_Admin->before()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:44:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
2012-05-22 00:44:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin::$auth ~ APPPATH/classes/controller/admin.php [ 16 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/ohrstrom...', 16, Array)
#1 [internal function]: Controller_Admin->before()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:45:27 --- ERROR: HTTP_Exception_403 [ 403 ]: Authentication Required ~ APPPATH/classes/controller/admin.php [ 18 ]
2012-05-22 00:45:27 --- STRACE: HTTP_Exception_403 [ 403 ]: Authentication Required ~ APPPATH/classes/controller/admin.php [ 18 ]
--
#0 [internal function]: Controller_Admin->before()
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin))
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#5 {main}
2012-05-22 00:45:28 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:28 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:45:29 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:29 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:45:29 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:29 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:45:35 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:35 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:45:48 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:48 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:45:49 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:49 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:45:49 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:49 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:45:49 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:49 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:45:50 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:45:50 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:05 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:05 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:06 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:06 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:06 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:06 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:06 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:06 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:06 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:06 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:07 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:07 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:07 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:07 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:07 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:07 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:07 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:07 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:08 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:08 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:08 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:08 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:08 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:08 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:08 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:08 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:08 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:08 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:08 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:08 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:09 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:09 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:10 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:10 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:14 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:14 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:15 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:15 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:15 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:15 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:15 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:15 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:16 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:16 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:16 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:16 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:16 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:16 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:16 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:16 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:19 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
2012-05-22 00:46:19 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/kohana/session.php [ 326 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(125): Kohana_Session->read(NULL)
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(57): Kohana_Session::instance('native')
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth/file.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/modules/auth/classes/kohana/auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/master.php(38): Kohana_Auth::instance()
#6 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(8): Controller_Master->__construct(Object(Request), Object(Response))
#7 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#8 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#9 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-22 00:46:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:46:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/index')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/index', NULL)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/admin.php(39): Kohana_View::factory('admin/index')
#3 [internal function]: Controller_Admin->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:46:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  data_root ~ APPPATH/classes/controller/page.php [ 115 ]
2012-05-22 00:46:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  data_root ~ APPPATH/classes/controller/page.php [ 115 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(115): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/ohrstrom...', 115, Array)
#1 [internal function]: Controller_Page->action_index()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:47:38 --- ERROR: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
2012-05-22 00:47:38 --- STRACE: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/Users/...', '/Users/ohrstrom...', 27, Array)
#1 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/fs.php(27): opendir('/Users/ohrstrom...')
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(118): Fs::dir_to_arr('/Users/ohrstrom...')
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:47:41 --- ERROR: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
2012-05-22 00:47:41 --- STRACE: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/Users/...', '/Users/ohrstrom...', 27, Array)
#1 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/fs.php(27): opendir('/Users/ohrstrom...')
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(118): Fs::dir_to_arr('/Users/ohrstrom...')
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:47:42 --- ERROR: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
2012-05-22 00:47:42 --- STRACE: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/Users/...', '/Users/ohrstrom...', 27, Array)
#1 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/fs.php(27): opendir('/Users/ohrstrom...')
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(118): Fs::dir_to_arr('/Users/ohrstrom...')
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:47:49 --- ERROR: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
2012-05-22 00:47:49 --- STRACE: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/Users/...', '/Users/ohrstrom...', 27, Array)
#1 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/fs.php(27): opendir('/Users/ohrstrom...')
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(118): Fs::dir_to_arr('/Users/ohrstrom...')
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:48:13 --- ERROR: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
2012-05-22 00:48:13 --- STRACE: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/Users/...', '/Users/ohrstrom...', 27, Array)
#1 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/fs.php(27): opendir('/Users/ohrstrom...')
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(118): Fs::dir_to_arr('/Users/ohrstrom...')
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:48:14 --- ERROR: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
2012-05-22 00:48:14 --- STRACE: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/Users/...', '/Users/ohrstrom...', 27, Array)
#1 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/fs.php(27): opendir('/Users/ohrstrom...')
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(118): Fs::dir_to_arr('/Users/ohrstrom...')
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:48:17 --- ERROR: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
2012-05-22 00:48:17 --- STRACE: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/Users/...', '/Users/ohrstrom...', 27, Array)
#1 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/fs.php(27): opendir('/Users/ohrstrom...')
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(118): Fs::dir_to_arr('/Users/ohrstrom...')
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:49:36 --- ERROR: View_Exception [ 0 ]: The requested view skeleton/subnav could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-22 00:49:36 --- STRACE: View_Exception [ 0 ]: The requested view skeleton/subnav could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(137): Kohana_View->set_filename('skeleton/subnav')
#1 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/view.php(30): Kohana_View->__construct('skeleton/subnav', Array)
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(100): Kohana_View::factory('skeleton/subnav', Array)
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}
2012-05-22 00:50:42 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
2012-05-22 00:50:42 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/kohana/auth.php [ 153 ]
--
#0 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/auth.php(25): Kohana_Auth->hash('user')
#1 [internal function]: Controller_Auth->action_login()
#2 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Auth))
#3 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-22 00:54:31 --- ERROR: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
2012-05-22 00:54:31 --- STRACE: ErrorException [ 2 ]: opendir(/Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/../data/media/other/) [function.opendir]: failed to open dir: No such file or directory ~ APPPATH/classes/fs.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/Users/...', '/Users/ohrstrom...', 27, Array)
#1 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/fs.php(27): opendir('/Users/ohrstrom...')
#2 /Users/ohrstrom/Documents/Code/course-cms/09-cms/application/classes/controller/page.php(118): Fs::dir_to_arr('/Users/ohrstrom...')
#3 [internal function]: Controller_Page->action_index()
#4 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/ohrstrom/Documents/Code/course-cms/kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/ohrstrom/Documents/Code/course-cms/09-cms/www_root/index.php(109): Kohana_Request->execute()
#8 {main}