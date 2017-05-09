<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-29 11:43:43 --- EMERGENCY: View_Exception [ 0 ]: The requested view main/header could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-29 11:43:43 --- DEBUG: #0 /var/www/html/dnsconsult/system/classes/Kohana/View.php(145): Kohana_View->set_filename('main/header')
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(30): Kohana_View->__construct('main/header', NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Login.php(11): Kohana_View::factory('main/header')
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-29 11:56:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: email ~ APPPATH/classes/Controller/Login.php [ 24 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:24
2017-03-29 11:56:34 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 24, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:24
2017-03-29 12:26:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 12:26:01 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(30): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 12:48:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/create.php [ 2 ] in file:line
2017-03-29 12:48:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 12:48:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/create.php [ 2 ] in file:line
2017-03-29 12:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 12:48:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/create.php [ 2 ] in file:line
2017-03-29 12:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 12:48:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/create.php [ 2 ] in file:line
2017-03-29 12:48:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 12:49:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/views/create.php [ 1 ] in /var/www/html/dnsconsult/application/views/create.php:1
2017-03-29 12:49:35 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:1
2017-03-29 13:10:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 30 ] in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:10:42 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 30, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:11:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 30 ] in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:11:13 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 30, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:11:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 30 ] in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:11:59 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 30, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:12:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 30 ] in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:12:18 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 30, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 30 ] in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:14 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 30, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 30 ] in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:15 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 30, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 30 ] in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:16 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 30, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 30 ] in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:16 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 30, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:30
2017-03-29 13:13:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/create.php [ 31 ] in /var/www/html/dnsconsult/application/views/create.php:31
2017-03-29 13:13:48 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(31): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 31, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:31
2017-03-29 13:23:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/classes/Controller/Create.php [ 15 ] in /var/www/html/dnsconsult/application/classes/Controller/Create.php:15
2017-03-29 13:23:27 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Create.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 15, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Create.php:15
2017-03-29 13:47:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:47:19 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(30): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:56:43 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:56:43 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(22): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:57:08 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:57:08 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(22): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:57:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:57:09 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(22): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:57:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 13:57:09 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(22): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:31 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:31 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:42 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:42 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:42 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:42 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:43 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:43 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:43 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:43 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:46 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:06:46 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:07:07 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:07:07 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:07:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:07:09 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:07:24 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:07:24 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(24): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:10:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/Controller/Create.php [ 27 ] in file:line
2017-03-29 14:10:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:10:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH/classes/Controller/Create.php [ 27 ] in file:line
2017-03-29 14:10:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:14:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Create.php [ 27 ] in file:line
2017-03-29 14:14:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:25:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: validator ~ APPPATH/views/create.php [ 4 ] in /var/www/html/dnsconsult/application/views/create.php:4
2017-03-29 14:25:12 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 4, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:4
2017-03-29 14:25:34 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant create - assumed 'create' ~ APPPATH/views/create.php [ 1 ] in /var/www/html/dnsconsult/application/views/create.php:1
2017-03-29 14:25:34 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(1): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/create.php:1
2017-03-29 14:32:12 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-29 14:32:12 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(33): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-29 14:32:25 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:32:25 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(32): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:32:46 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:32:46 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(31): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:42:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2017-03-29 14:42:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:42:43 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:42:43 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /var/www/html/dnsconsult/application/classes/Model/User.php(159): Kohana_ORM->create(Object(Validation))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(30): Model_User->create_user(Array, Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:43:38 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:43:38 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /var/www/html/dnsconsult/application/classes/Model/User.php(159): Kohana_ORM->create(Object(Validation))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(30): Model_User->create_user(Array, Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:44:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Create.php [ 43 ] in file:line
2017-03-29 14:44:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:44:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Create.php [ 43 ] in file:line
2017-03-29 14:44:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:56:41 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:56:41 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:57:22 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:57:22 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:57:36 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:57:36 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 14:58:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Create.php [ 38 ] in file:line
2017-03-29 14:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:58:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Create.php [ 38 ] in file:line
2017-03-29 14:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:58:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Create.php [ 38 ] in file:line
2017-03-29 14:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 14:58:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH/classes/Controller/Create.php [ 38 ] in file:line
2017-03-29 14:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 15:03:00 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 15:03:00 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 20:31:27 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 20:31:27 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 20:33:18 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 20:33:18 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-29 20:40:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:40:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:42:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:42:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:51:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:51:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:51:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:51:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:51:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:51:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:52:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 20:52:20 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 1540, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('jean', 'teste', false)
#4 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Auth->login('jean', 'teste')
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 20:56:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 20:56:15 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 1540, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('jean', 'teste', false)
#4 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Auth->login('jean', 'teste')
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 20:56:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 20:56:15 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 1540, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('jean', 'teste', false)
#4 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Auth->login('jean', 'teste')
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 20:57:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/User.php [ 15 ] in file:line
2017-03-29 20:57:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:57:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:57:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:59:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:59:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:59:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:59:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:59:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:59:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:59:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 20:59:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 20:59:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:01:13 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'dnsmonitordb.notices' doesn't exist [ SHOW FULL COLUMNS FROM `notices` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/MySQL.php:359
2017-03-29 21:01:13 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('notices')
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/html/dnsconsult/modules/orm/classes/Kohana/Auth/ORM.php(79): Kohana_ORM::factory('User')
#7 /var/www/html/dnsconsult/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('jean', 'teste', false)
#8 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Auth->login('jean', 'teste')
#9 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/MySQL.php:359
2017-03-29 21:01:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 21:01:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:04:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/', expecting T_FUNCTION ~ APPPATH/classes/Model/User.php [ 4 ] in file:line
2017-03-29 21:04:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:05:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 21:05:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:06:47 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 21:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:07:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 21:07:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:07:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 21:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:08:42 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 21:08:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:09:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 21:09:32 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 1540, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('jean', 'teste', false)
#4 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Auth->login('jean', 'teste')
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 21:10:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 21:10:14 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 1540, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('jean', 'teste', false)
#4 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Auth->login('jean', 'teste')
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1540
2017-03-29 21:12:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 21:12:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:16:22 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= 'jean' LIMIT 1' at line 1 [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE = 'jean' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-29 21:16:22 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/html/dnsconsult/modules/orm/classes/Kohana/Auth/ORM.php(80): Kohana_ORM->find()
#4 /var/www/html/dnsconsult/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('jean', 'teste', false)
#5 /var/www/html/dnsconsult/application/classes/Controller/Login.php(26): Kohana_Auth->login('jean', 'teste')
#6 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-29 21:17:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Valid::username() ~ APPPATH/classes/Model/User.php [ 11 ] in file:line
2017-03-29 21:17:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:26:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Create.php [ 28 ] in file:line
2017-03-29 21:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:26:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2017-03-29 21:26:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:27:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH/classes/Controller/Create.php [ 24 ] in file:line
2017-03-29 21:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:31:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH/classes/Controller/Create.php [ 24 ] in file:line
2017-03-29 21:31:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 21:33:35 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-29 21:33:35 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(31): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-29 21:42:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH/classes/Controller/Create.php [ 15 ] in /var/www/html/dnsconsult/application/classes/Controller/Create.php:15
2017-03-29 21:42:34 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Create.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 15, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Create.php:15
2017-03-29 21:45:00 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'teste' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('teste', 'teste', '818cf076012bd0e42381d9d5ae5c0b432805a003e02a83bf0d5f7bcb425661aa') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-29 21:45:00 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-29 21:57:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: POST ~ APPPATH/classes/Controller/Login.php [ 19 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:19
2017-03-29 21:57:35 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 19, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:19
2017-03-29 22:11:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2017-03-29 22:11:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 22:38:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:38:06 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:38:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:38:26 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:39:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:39:45 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:39:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:39:46 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:39:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:39:47 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:12 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:13 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:13 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:14 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:41:14 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:10 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:10 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:11 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:11 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:43:29 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:45:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:45:39 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:45:40 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:48:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 8 ] in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:48:27 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 8, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:8
2017-03-29 22:49:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: teste ~ APPPATH/views/acl.php [ 2 ] in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:49:10 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 2, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:49:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 2 ] in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:49:17 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 2, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 2 ] in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:33 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 2, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 2 ] in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:33 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 2, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 2 ] in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:34 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 2, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 2 ] in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:34 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 2, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 2 ] in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:50:37 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 2, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:51:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: admin ~ APPPATH/views/acl.php [ 6 ] in /var/www/html/dnsconsult/application/views/acl.php:6
2017-03-29 22:51:02 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 6, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:6
2017-03-29 22:51:30 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/acl.php [ 6 ] in /var/www/html/dnsconsult/application/views/acl.php:6
2017-03-29 22:51:30 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(6): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/html/d...', 6, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:6
2017-03-29 22:51:47 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/acl.php [ 2 ] in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 22:51:47 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(2): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/html/d...', 2, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:2
2017-03-29 23:10:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/views/acl.php [ 20 ] in file:line
2017-03-29 23:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 23:11:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'url' not found ~ APPPATH/views/acl.php [ 20 ] in file:line
2017-03-29 23:11:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 23:14:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'url' not found ~ APPPATH/views/acl.php [ 20 ] in file:line
2017-03-29 23:14:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-29 23:17:07 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant BASE_URL - assumed 'BASE_URL' ~ APPPATH/views/acl.php [ 20 ] in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:17:07 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(20): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/d...', 20, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:18:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/views/acl.php [ 20 ] in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:18:23 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/d...', 20, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:18:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/views/acl.php [ 20 ] in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:18:50 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/d...', 20, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:19:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$ip ~ APPPATH/views/acl.php [ 20 ] in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:19:05 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/d...', 20, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:19:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/views/acl.php [ 20 ] in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:19:29 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/d...', 20, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:20
2017-03-29 23:22:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/acl.php [ 20 ] in file:line
2017-03-29 23:22:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line