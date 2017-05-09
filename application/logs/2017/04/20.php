<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-04-20 04:42:22 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-20 04:42:22 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(39): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-20 04:43:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-20 04:43:09 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(39): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-20 04:53:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Controller/Create.php [ 32 ] in file:line
2017-04-20 04:53:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 04:55:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH/classes/Controller/Create.php [ 32 ] in file:line
2017-04-20 04:55:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 04:56:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-20 04:56:03 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(41): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-20 05:09:12 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'View' does not have a method 'unique_username' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2017-04-20 05:09:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/var/www/html/d...', 377, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(42): Kohana_Validation->check()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2017-04-20 05:14:57 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, array given, called in /var/www/html/dnsconsult/application/classes/Controller/Create.php on line 44 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1419 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1419
2017-04-20 05:14:57 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1419): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/html/d...', 1419, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Create.php(44): Kohana_ORM->save(Array)
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1419
2017-04-20 05:18:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::validate_create() ~ APPPATH/classes/Controller/Create.php [ 36 ] in file:line
2017-04-20 05:18:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-20 05:18:53 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-20 05:18:53 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(36): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-20 05:19:58 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, array given, called in /var/www/html/dnsconsult/application/classes/Controller/Create.php on line 35 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1419 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1419
2017-04-20 05:19:58 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1419): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/html/d...', 1419, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Create.php(35): Kohana_ORM->save(Array)
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1419
2017-04-20 05:21:11 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, array given, called in /var/www/html/dnsconsult/application/classes/Controller/Create.php on line 35 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1419 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1419
2017-04-20 05:21:11 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1419): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/html/d...', 1419, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Create.php(35): Kohana_ORM->save(Array)
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1419