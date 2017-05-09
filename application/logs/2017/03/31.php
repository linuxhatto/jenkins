<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-03-31 00:29:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2017-03-31 00:29:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 00:45:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 00:45:04 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 00:46:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2017-03-31 00:46:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 00:46:46 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 00:46:46 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:11:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:11:09 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:12:22 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:12:22 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:14:11 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:14:11 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:15:22 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:15:22 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:15:48 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:15:48 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:18:12 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:18:12 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:20:58 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:20:58 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 01:21:32 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:21:32 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:23:54 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:23:54 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:38:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Model/Role.php [ 21 ] in file:line
2017-03-31 01:38:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 01:39:03 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:39:03 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:39:16 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:39:16 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:39:23 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:39:23 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:40:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2017-03-31 01:40:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 01:40:57 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in /var/www/html/dnsconsult/application/classes/Controller/Create.php on line 28 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1563 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1563
2017-03-31 01:40:57 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1563): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/d...', 1563, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add(Object(Model_Role))
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1563
2017-03-31 01:42:31 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:42:31 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', 1)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:43:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Create.php [ 28 ] in /var/www/html/dnsconsult/application/classes/Controller/Create.php:28
2017-03-31 01:43:03 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 28, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Create.php:28
2017-03-31 01:43:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1567
2017-03-31 01:43:14 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/d...', 1567, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add(1, 1)
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1567
2017-03-31 01:46:45 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in /var/www/html/dnsconsult/application/classes/Controller/Create.php on line 28 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1563 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1563
2017-03-31 01:46:45 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1563): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/html/d...', 1563, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add(Object(Model_Role))
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1563
2017-03-31 01:46:53 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:46:53 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:47:53 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:47:53 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:49:49 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:49:49 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:50:50 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:50:50 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:54:20 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:54:20 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:59:39 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 01:59:39 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:02:03 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:02:03 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:03:16 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:03:16 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:04:40 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:04:40 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:10:07 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:10:07 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:10:22 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:10:22 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:13:08 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:13:08 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:20:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/orm/classes/Kohana/ORM.php [ 1567 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1567
2017-03-31 02:20:22 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/html/d...', 1567, Array)
#1 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add(1, Object(Model_Role))
#2 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1567
2017-03-31 02:26:44 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:26:44 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:30:54 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:30:54 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:31:09 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:31:09 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:32:52 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:32:52 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:33:02 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:33:02 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:36:21 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:36:21 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:38:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/create could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-31 02:38:53 --- DEBUG: #0 /var/www/html/dnsconsult/system/classes/Kohana/View.php(145): Kohana_View->set_filename('user/create')
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/create', NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(23): Kohana_View::factory('user/create')
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/system/classes/Kohana/View.php:145
2017-03-31 02:39:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2017-03-31 02:39:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 02:39:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:39:26 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:40:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:40:03 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:40:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:40:17 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:42:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:42:01 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:43:21 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 02:43:21 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /var/www/html/dnsconsult/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Model_Auth_User->create_user(Array, Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 02:44:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:44:22 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:44:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:44:40 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 02:45:44 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:45:44 --- DEBUG: #0 /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/database/classes/Kohana/Database/Query.php:251
2017-03-31 02:47:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 02:47:19 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 02:47:52 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 02:47:52 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:23:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: localization ~ APPPATH/views/create.php [ 14 ] in /var/www/html/dnsconsult/application/views/create.php:14
2017-03-31 13:23:06 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/create.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 14, Array)
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
#14 {main} in /var/www/html/dnsconsult/application/views/create.php:14
2017-03-31 13:34:12 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:34:12 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:34:24 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:34:24 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:35:20 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:35:20 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:36:49 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:36:49 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:37:18 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:37:18 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:37:55 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:37:55 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:38:13 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:38:13 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:38:23 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:38:23 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:38:59 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:38:59 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:39:22 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:39:22 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(27): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:42:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: localization ~ APPPATH/classes/Controller/Create.php [ 28 ] in /var/www/html/dnsconsult/application/classes/Controller/Create.php:28
2017-03-31 13:42:09 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 28, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Create.php:28
2017-03-31 13:45:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: localization ~ APPPATH/classes/Controller/Create.php [ 28 ] in /var/www/html/dnsconsult/application/classes/Controller/Create.php:28
2017-03-31 13:45:59 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 28, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Create.php:28
2017-03-31 13:46:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: localization ~ APPPATH/classes/Controller/Create.php [ 28 ] in /var/www/html/dnsconsult/application/classes/Controller/Create.php:28
2017-03-31 13:46:24 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Create.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/d...', 28, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Create.php:28
2017-03-31 13:47:37 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:47:37 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:47:47 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:47:47 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:48:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:48:01 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:49:46 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:49:46 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:50:41 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:50:41 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:51:05 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 13:51:05 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(29): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 14:09:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/index.php [ 8 ] in file:line
2017-03-31 14:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 14:09:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/index.php [ 8 ] in file:line
2017-03-31 14:09:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 14:09:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/index.php [ 8 ] in file:line
2017-03-31 14:09:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 14:09:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/index.php [ 8 ] in file:line
2017-03-31 14:09:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 14:09:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/index.php [ 8 ] in file:line
2017-03-31 14:09:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 14:09:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/index.php [ 8 ] in file:line
2017-03-31 14:09:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 14:50:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 14:50:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 14:51:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 14:51:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 15:08:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'html' not found ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 15:08:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 15:11:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/', expecting T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 15:11:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 15:12:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 15:12:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 15:13:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 15:13:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 15:17:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::styles() ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 15:17:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 15:17:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::styles() ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 15:17:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 15:18:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::scripts() ~ APPPATH/views/footer.php [ 9 ] in file:line
2017-03-31 15:18:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 15:42:21 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 15:42:21 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(33): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 15:42:48 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 15:42:48 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(33): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 15:57:43 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 15:57:43 --- DEBUG: #0 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /var/www/html/dnsconsult/application/classes/Controller/Create.php(33): Kohana_ORM->save()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Create->action_createUser()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Create))
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/dnsconsult/modules/orm/classes/Kohana/ORM.php:1302
2017-03-31 16:51:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/Controller/Login.php [ 17 ] in file:line
2017-03-31 16:51:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 16:52:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:52:12 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:53:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:53:12 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:54:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:54:20 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
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
2017-03-31 16:56:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:56:33 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
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
2017-03-31 16:56:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:56:35 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
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
2017-03-31 16:56:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:56:36 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
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
2017-03-31 16:56:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:56:37 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
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
2017-03-31 16:56:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:56:37 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
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
2017-03-31 16:56:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template.php [ 1 ] in /var/www/html/dnsconsult/application/views/template.php:1
2017-03-31 16:56:37 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 1, Array)
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
2017-03-31 16:56:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 9 ] in /var/www/html/dnsconsult/application/views/login.php:9
2017-03-31 16:56:51 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 9, Array)
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
2017-03-31 16:59:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 9 ] in /var/www/html/dnsconsult/application/views/login.php:9
2017-03-31 16:59:01 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 9, Array)
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
2017-03-31 16:59:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 9 ] in /var/www/html/dnsconsult/application/views/login.php:9
2017-03-31 16:59:02 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 9, Array)
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
2017-03-31 16:59:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 9 ] in /var/www/html/dnsconsult/application/views/login.php:9
2017-03-31 16:59:03 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 9, Array)
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
2017-03-31 17:01:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 35 ] in /var/www/html/dnsconsult/application/views/login.php:35
2017-03-31 17:01:33 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 35, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:35
2017-03-31 17:07:09 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/header.php [ 46 ] in file:line
2017-03-31 17:07:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 17:09:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/header.php [ 46 ] in file:line
2017-03-31 17:09:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 17:10:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/header.php [ 46 ] in file:line
2017-03-31 17:10:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 17:10:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/header.php [ 46 ] in file:line
2017-03-31 17:10:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 17:10:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/header.php [ 46 ] in file:line
2017-03-31 17:10:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-03-31 17:11:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant username - assumed 'username' ~ APPPATH/views/header.php [ 46 ] in /var/www/html/dnsconsult/application/views/header.php:46
2017-03-31 17:11:58 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/header.php(46): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/d...', 46, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_View->__toString()
#5 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#6 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#7 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/dnsconsult/application/views/header.php:46
2017-03-31 17:50:54 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/header.php [ 46 ] in /var/www/html/dnsconsult/application/views/header.php:46
2017-03-31 17:50:54 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/header.php(46): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/html/d...', 46, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/html/dnsconsult/application/views/template.php(1): Kohana_View->__toString()
#5 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#6 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#7 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Acl))
#11 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/dnsconsult/application/views/header.php:46
2017-03-31 18:19:38 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 33 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:33
2017-03-31 18:19:38 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(33): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/html/d...', 33, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:33
2017-03-31 18:21:28 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 33 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:33
2017-03-31 18:21:28 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(33): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/html/d...', 33, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:33
2017-03-31 18:21:57 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 32 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:32
2017-03-31 18:21:57 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/html/d...', 32, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:32
2017-03-31 18:22:05 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 32 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:32
2017-03-31 18:22:05 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/html/d...', 32, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:32
2017-03-31 18:22:57 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 32 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:32
2017-03-31 18:22:57 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/html/d...', 32, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:32
2017-03-31 18:23:00 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 32 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:32
2017-03-31 18:23:00 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(32): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/html/d...', 32, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:32
2017-03-31 18:23:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:23:02 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:23:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:23:13 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:23:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:23:52 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:24:46 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 31 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:31
2017-03-31 18:24:46 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(31): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/html/d...', 31, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:31
2017-03-31 18:24:58 --- EMERGENCY: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Login.php [ 31 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:31
2017-03-31 18:24:58 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(31): Kohana_Core::error_handler(2048, 'Creating defaul...', '/var/www/html/d...', 31, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:31
2017-03-31 18:25:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:25:45 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:25:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:25:50 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:26:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:26:20 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:26:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:26:22 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:26:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/classes/Controller/Login.php [ 12 ] in /var/www/html/dnsconsult/application/classes/Controller/Login.php:12
2017-03-31 18:26:35 --- DEBUG: #0 /var/www/html/dnsconsult/application/classes/Controller/Login.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 12, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(84): Controller_Login->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#4 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/dnsconsult/application/classes/Controller/Login.php:12
2017-03-31 18:27:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:04 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:05 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:06 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:06 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:32 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:33 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:33 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:33 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:33 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:34 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 36 ] in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:34 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 36, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:36
2017-03-31 18:27:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 49 ] in /var/www/html/dnsconsult/application/views/login.php:49
2017-03-31 18:27:52 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 49, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:49
2017-03-31 18:27:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 49 ] in /var/www/html/dnsconsult/application/views/login.php:49
2017-03-31 18:27:55 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 49, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:49
2017-03-31 18:27:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 49 ] in /var/www/html/dnsconsult/application/views/login.php:49
2017-03-31 18:27:55 --- DEBUG: #0 /var/www/html/dnsconsult/application/views/login.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/d...', 49, Array)
#1 /var/www/html/dnsconsult/system/classes/Kohana/View.php(62): include('/var/www/html/d...')
#2 /var/www/html/dnsconsult/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/d...', Array)
#3 /var/www/html/dnsconsult/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/dnsconsult/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#7 /var/www/html/dnsconsult/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/dnsconsult/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/dnsconsult/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/dnsconsult/application/views/login.php:49
2017-03-31 18:57:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/views/header.php [ 70 ] in file:line
2017-03-31 18:57:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line