<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-04-28 18:05:41 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-28 18:05:41 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(39): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-28 18:07:58 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-28 18:07:58 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(39): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-28 18:11:06 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-28 18:11:06 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(39): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-28 18:25:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/Controller/Create.php [ 16 ] in file:line
2017-04-28 18:25:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-28 18:26:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/createUser.php [ 53 ] in /var/www/html/dnsconsult/application/views/createUser.php:53
2017-04-28 18:26:41 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/createUser.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 53, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/dnsconsult/application/views/template.php(3): Kohana_View->__toString()
#5 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#6 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#7 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#11 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/dnsconsult/application/views/createUser.php:53
2017-04-28 18:38:52 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-28 18:38:52 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(39): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302