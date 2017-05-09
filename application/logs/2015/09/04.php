<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-04 17:05:07 --- EMERGENCY: Kohana_Exception [ 0 ]: GD is either not installed or not enabled, check your configuration ~ MODPATH/image/classes/Kohana/Image/GD.php [ 31 ] in /var/www/html/PetSocial/modules/image/classes/Kohana/Image/GD.php:88
2015-09-04 17:05:07 --- DEBUG: #0 /var/www/html/PetSocial/modules/image/classes/Kohana/Image/GD.php(88): Kohana_Image_GD::check()
#1 /var/www/html/PetSocial/modules/image/classes/Kohana/Image.php(56): Kohana_Image_GD->__construct('/var/www/html/P...')
#2 /var/www/html/PetSocial/application/classes/Controller/Post.php(109): Kohana_Image::factory('/var/www/html/P...')
#3 /var/www/html/PetSocial/application/classes/Controller/Post.php(41): Controller_Post->_save_image(Array)
#4 /var/www/html/PetSocial/system/classes/Kohana/Controller.php(84): Controller_Post->action_upload()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/PetSocial/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Post))
#7 /var/www/html/PetSocial/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/PetSocial/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/PetSocial/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/PetSocial/modules/image/classes/Kohana/Image/GD.php:88