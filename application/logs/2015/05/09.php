<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-09 05:25:27 --- CRITICAL: ErrorException [ 2 ]: imagecreatefrompng(C:\wamp\www\pokeboximages/world/area/1001.png): failed to open stream: No such file or directory ~ APPPATH\classes\controller\world.php [ 131 ] in file:line
2015-05-09 05:25:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'C:\\wamp\\www\\pok...', 131, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\world.php(131): imagecreatefrompng('C:\\wamp\\www\\pok...')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_World->action_update_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-09 05:26:06 --- CRITICAL: ErrorException [ 2 ]: imagecreatefrompng(C:\wamp\www\pokeboximages/world/area/1001.png): failed to open stream: No such file or directory ~ APPPATH\classes\controller\world.php [ 131 ] in file:line
2015-05-09 05:26:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'C:\\wamp\\www\\pok...', 131, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\world.php(131): imagecreatefrompng('C:\\wamp\\www\\pok...')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_World->action_update_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-09 05:26:07 --- CRITICAL: ErrorException [ 2 ]: imagecreatefrompng(C:\wamp\www\pokeboximages/world/area/1001.png): failed to open stream: No such file or directory ~ APPPATH\classes\controller\world.php [ 131 ] in file:line
2015-05-09 05:26:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'imagecreatefrom...', 'C:\\wamp\\www\\pok...', 131, Array)
#1 C:\wamp\www\pokebox\application\classes\controller\world.php(131): imagecreatefrompng('C:\\wamp\\www\\pok...')
#2 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(84): Controller_World->action_update_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#5 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-09 06:04:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Area_Tile::order() ~ APPPATH\classes\controller\world.php [ 129 ] in file:line
2015-05-09 06:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line