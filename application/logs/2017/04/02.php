<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-04-02 02:20:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$localization ~ APPPATH/classes/Controller/Login.php [ 21 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:21
2017-04-02 02:20:02 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/d...', 21, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:21
2017-04-02 02:27:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH/classes/Controller/Login.php [ 23 ] in file:line
2017-04-02 02:27:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 02:28:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_EXIT, expecting ',' or ';' ~ APPPATH/classes/Controller/Login.php [ 25 ] in file:line
2017-04-02 02:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 06:31:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$username ~ APPPATH/classes/Controller/Login.php [ 24 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:24
2017-04-02 06:31:21 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/d...', 24, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:24
2017-04-02 07:01:56 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Login.php [ 24 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:24
2017-04-02 07:01:56 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(24): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/d...', 24, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:24
2017-04-02 07:06:32 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::where(), called in /var/www/html/dnsconsult/application/classes/Controller/Login.php on line 23 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1849
2017-04-02 07:06:32 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/d...', 1849, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Login.php(23): Kohana_ORM->where('localization')
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1849
2017-04-02 07:07:42 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /var/www/html/dnsconsult/application/classes/Controller/Login.php on line 23 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1849
2017-04-02 07:07:42 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/d...', 1849, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Login.php(23): Kohana_ORM->where('localization', 'Argentina')
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1849
2017-04-02 07:18:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Login.php [ 23 ] in file:line
2017-04-02 07:18:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 07:21:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:25
2017-04-02 07:21:38 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(25): Kohana_ORM->find_all()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:25
2017-04-02 07:23:39 --- EMERGENCY: ErrorException [ 8 ]: Object of class Model_User could not be converted to int ~ APPPATH/classes/Controller/Login.php [ 26 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:26
2017-04-02 07:23:39 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Core::error_handler(8, 'Object of class...', '/var/www/html/d...', 26, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:26
2017-04-02 07:23:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/classes/Controller/Login.php [ 26 ] in file:line
2017-04-02 07:23:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 07:24:27 --- EMERGENCY: ErrorException [ 8 ]: Object of class Model_User could not be converted to int ~ APPPATH/classes/Controller/Login.php [ 26 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:26
2017-04-02 07:24:27 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Core::error_handler(8, 'Object of class...', '/var/www/html/d...', 26, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:26
2017-04-02 07:24:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Login.php [ 26 ] in file:line
2017-04-02 07:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 07:28:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$localization ~ APPPATH/classes/Controller/Login.php [ 29 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:29
2017-04-02 07:28:48 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/d...', 29, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:29
2017-04-02 07:30:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Login.php [ 32 ] in file:line
2017-04-02 07:30:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 15:45:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Login.php [ 38 ] in file:line
2017-04-02 15:45:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 16:10:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Acl::localization() ~ APPPATH/classes/Controller/Acl.php [ 89 ] in file:line
2017-04-02 16:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 16:17:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Acl.php [ 23 ] in file:line
2017-04-02 16:17:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 16:18:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Acl.php [ 23 ] in file:line
2017-04-02 16:18:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 16:19:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Acl.php [ 23 ] in file:line
2017-04-02 16:19:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 16:19:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Acl.php [ 23 ] in file:line
2017-04-02 16:19:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 16:19:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Acl.php [ 23 ] in file:line
2017-04-02 16:19:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 16:19:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Acl.php [ 23 ] in file:line
2017-04-02 16:19:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-02 16:19:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Acl.php [ 23 ] in file:line
2017-04-02 16:19:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line