<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-29 20:19:32 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Unknown MySQL server host 'mysql' (2) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/PetSocial/modules/database/classes/Kohana/Database/MySQL.php:171
2015-08-29 20:19:32 --- DEBUG: #0 /var/www/html/PetSocial/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/PetSocial/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/PetSocial/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('notices')
#3 /var/www/html/PetSocial/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/PetSocial/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/PetSocial/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/PetSocial/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/html/PetSocial/application/classes/Controller/Home.php(16): Kohana_ORM::factory('Notice')
#8 /var/www/html/PetSocial/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/PetSocial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /var/www/html/PetSocial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/PetSocial/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/PetSocial/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/PetSocial/modules/database/classes/Kohana/Database/MySQL.php:171