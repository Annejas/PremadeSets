<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-13 13:15:13 --- CRITICAL: View_Exception [ 0 ]: The requested view game/battle could not be found ~ SYSPATH\classes\kohana\View.php [ 265 ] in C:\wamp\www\lolapi\system\classes\kohana\View.php:145
2015-08-13 13:15:13 --- DEBUG: #0 C:\wamp\www\lolapi\system\classes\kohana\View.php(145): Kohana_View->set_filename('game/battle')
#1 C:\wamp\www\lolapi\application\classes\controller\index.php(7): Kohana_View->__construct('game/battle')
#2 C:\wamp\www\lolapi\system\classes\kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\lolapi\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\wamp\www\lolapi\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\lolapi\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\lolapi\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\lolapi\system\classes\kohana\View.php:145