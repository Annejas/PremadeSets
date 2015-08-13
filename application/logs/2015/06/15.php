<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-15 13:37:05 --- CRITICAL: Kohana_Exception [ 0 ]: The widht property does not exist in the Model_Area class ~ MODPATH\orm\classes\kohana\ORM.php [ 760 ] in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:702
2015-06-15 13:37:05 --- DEBUG: #0 C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php(702): Kohana_ORM->set('widht', '12')
#1 C:\wamp\www\pokebox\application\classes\controller\world.php(19): Kohana_ORM->__set('widht', '12')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_World->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\pokebox\modules\orm\classes\kohana\ORM.php:702
2015-06-15 13:37:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\controller\world.php [ 23 ] in file:line
2015-06-15 13:37:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line