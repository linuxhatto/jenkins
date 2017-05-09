<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-30 00:56:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 16 ] in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 00:56:29 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 16, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 00:56:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 16 ] in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 00:56:47 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 16, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 00:57:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view Acl/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-30 00:57:35 --- DEBUG: #0 /var/www/html/dnsconsult/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Acl/edit')
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(30): Kohana_View->__construct('Acl/edit', NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(49): Kohana_View::factory('Acl/edit')
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-30 00:57:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view Acl/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-30 00:57:47 --- DEBUG: #0 /var/www/html/dnsconsult/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Acl/edit')
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(30): Kohana_View->__construct('Acl/edit', NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(49): Kohana_View::factory('Acl/edit')
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-30 01:01:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view Acl/edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-30 01:01:03 --- DEBUG: #0 /var/www/html/dnsconsult/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Acl/edit')
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(30): Kohana_View->__construct('Acl/edit', NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(49): Kohana_View::factory('Acl/edit')
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-30 01:03:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 16 ] in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:06 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 16, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 16 ] in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:40 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 16, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 16 ] in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:40 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 16, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 16 ] in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:41 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 16, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 16 ] in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:42 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 16, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 16 ] in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:03:59 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 16, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:16
2017-03-30 01:07:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/edit.php [ 17 ] in file:line
2017-03-30 01:07:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 01:07:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/edit.php [ 33 ] in file:line
2017-03-30 01:07:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 01:07:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:07:56 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:08:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:08:43 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:08:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:08:44 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:09:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:09:12 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:09:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:09:15 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:09:30 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:09:30 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:10:37 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:10:37 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:00 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:00 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:02 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:02 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:03 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:03 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:03 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:04 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:04 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:04 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:05 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:20 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:11:35 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:12:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The valor property does not exist in the Model_Acl class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 01:12:46 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('valor')
#1 /var/www/html/dnsconsult/application/views/edit.php(28): Kohana_ORM->__get('valor')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:603
2017-03-30 10:31:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/createAcl.php [ 41 ] in file:line
2017-03-30 10:31:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 11:09:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: userfile ~ APPPATH/classes/Controller/Acl.php [ 59 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:09:06 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(59): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 59, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:10:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: userfile ~ APPPATH/classes/Controller/Acl.php [ 59 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:10:42 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(59): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 59, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:10:45 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update acl model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:54
2017-03-30 11:10:45 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(54): Kohana_ORM->update()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:54
2017-03-30 11:37:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Acl.php [ 59 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:37:54 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(59): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 59, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:38:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Acl.php [ 59 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:38:38 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(59): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 59, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:38:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/Acl.php [ 59 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:38:49 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(59): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 59, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 11:39:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arquivo ~ APPPATH/classes/Controller/Acl.php [ 60 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:60
2017-03-30 11:39:29 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 60, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:60
2017-03-30 11:42:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: arquivo ~ APPPATH/classes/Controller/Acl.php [ 60 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:60
2017-03-30 11:42:24 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 60, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:60
2017-03-30 14:29:08 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update acl model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:54
2017-03-30 14:29:08 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(54): Kohana_ORM->update()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:54
2017-03-30 14:30:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ourFileName ~ APPPATH/classes/Controller/Acl.php [ 59 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 14:30:50 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 59, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:59
2017-03-30 14:31:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update acl model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:54
2017-03-30 14:31:52 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(54): Kohana_ORM->update()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:54
2017-03-30 14:33:30 --- EMERGENCY: ErrorException [ 2 ]: fopen(/var/www/html/dnsconsult/static/files/testFile.txt): failed to open stream: Permission denied ~ APPPATH/classes/Controller/Acl.php [ 60 ] in file:line
2017-03-30 14:33:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/var/www/...', '/var/www/html/d...', 60, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(60): fopen('/var/www/html/d...', 'w')
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2017-03-30 14:46:36 --- EMERGENCY: ErrorException [ 2 ]: fclose() expects parameter 1 to be resource, integer given ~ APPPATH/classes/Controller/Acl.php [ 62 ] in file:line
2017-03-30 14:46:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fclose() expect...', '/var/www/html/d...', 62, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(62): fclose(5)
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2017-03-30 14:57:51 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/Controller/Acl.php [ 61 ] in file:line
2017-03-30 14:57:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 14:58:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 14:58:36 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(61): Kohana_ORM->find_all()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:02:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:02:19 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(61): Kohana_ORM->find()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:05:05 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:05:05 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(61): Kohana_ORM->find()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:09:34 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update acl model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:54
2017-03-30 15:09:34 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(54): Kohana_ORM->update()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:54
2017-03-30 15:11:32 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:11:32 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(61): Kohana_ORM->find_all()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:11:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:11:54 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(61): Kohana_ORM->find_all()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:12:27 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ APPPATH/classes/Controller/Acl.php [ 61 ] in file:line
2017-03-30 15:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 15:17:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:62
2017-03-30 15:17:59 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(62): Kohana_ORM->find()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:62
2017-03-30 15:18:27 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:18:27 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(61): Kohana_ORM->find()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:61
2017-03-30 15:23:13 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 991 ] in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:62
2017-03-30 15:23:13 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(62): Kohana_ORM->find_all()
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Acl.php:62
2017-03-30 15:32:32 --- EMERGENCY: ErrorException [ 2 ]: fwrite() expects parameter 2 to be string, object given ~ APPPATH/classes/Controller/Acl.php [ 62 ] in file:line
2017-03-30 15:32:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fwrite() expect...', '/var/www/html/d...', 62, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(62): fwrite(Resource id #7, Object(Database_MySQL_Result))
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2017-03-30 15:39:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/Controller/Acl.php [ 63 ] in file:line
2017-03-30 15:39:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 16:24:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: acl ~ APPPATH/views/acl.php [ 17 ] in /var/www/html/dnsconsult/application/views/acl.php:17
2017-03-30 16:24:12 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/acl.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 17, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/acl.php:17
2017-03-30 16:30:40 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Lost connection to MySQL server at 'reading initial communication packet', system error: 0 ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/MySQL.php:171
2017-03-30 16:30:40 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('acl_ve')
#3 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/html/dnsconsult/application/classes/Controller/Acl.php(17): Kohana_ORM::factory('Acl')
#8 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Acl->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#11 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/MySQL.php:171
2017-03-30 16:42:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 9 ] in /var/www/html/dnsconsult/application/views/login.php:9
2017-03-30 16:42:26 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 9, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:9
2017-03-30 16:45:15 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'fabio' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('fabio', 'fabio@gmail.com', '55e3b90e62d8d7c51a60039b16c43d6be0ec0c2a15fd8ccdb8b65c81c85dbdd8') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-30 16:45:15 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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
2017-03-30 16:45:29 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'fabiolopes' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('fabiolopes', 'fabio@gmail.com', '55e3b90e62d8d7c51a60039b16c43d6be0ec0c2a15fd8ccdb8b65c81c85dbdd8') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-30 16:45:29 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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
2017-03-30 16:45:37 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'fa' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('fa', 'fabio@gmail.com', '1150362fbeaa336a2701c2bb8ccb4ab20e0a0be99c5ac18047e97134c647b8fb') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-30 16:45:37 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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
2017-03-30 16:45:44 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'fabio@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('fab', 'fabio@gmail.com', '481a88a4bafeb33a14e67e9b6ad7b77458468b86908838b0816d5df48f2f6319') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-30 16:45:44 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
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
2017-03-30 17:16:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/login.php [ 4 ] in file:line
2017-03-30 17:16:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 17:16:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/views/login.php [ 8 ] in file:line
2017-03-30 17:16:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 17:22:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-30 17:22:45 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-30 17:31:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Login.php [ 25 ] in file:line
2017-03-30 17:31:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 17:56:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_save() ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 17:56:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:10:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:10:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:10:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:10:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:10:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:10:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:10:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:11:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:11:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:11:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:11:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:11:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:11:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:11:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'action_save' not found ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:11:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:13:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Template::action_save() ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:13:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:16:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_save() ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:16:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:16:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_save() ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:16:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-30 18:16:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function action_save() ~ APPPATH/classes/Controller/Acl.php [ 84 ] in file:line
2017-03-30 18:16:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line