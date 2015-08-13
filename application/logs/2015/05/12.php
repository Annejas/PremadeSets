<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-12 11:58:20 --- CRITICAL: ErrorException [ 2 ]: imagecreatefrompng(C:\wamp\www\pokebox/images/world/area/13.png): failed to open stream: No such file or directory ~ APPPATH\classes\controller\world.php [ 134 ] in file:line
2015-05-12 11:58:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'C:\\wamp\\www\\pok...', 134, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\world.php(134): imagecreatefrompng('C:\\wamp\\www\\pok...')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_World->action_update_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in file:line