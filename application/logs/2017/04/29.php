<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-04-29 10:45:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/views/createUser.php [ 8 ] in file:line
2017-04-29 10:45:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-04-29 12:14:26 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-04-29 12:14:26 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(54): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302