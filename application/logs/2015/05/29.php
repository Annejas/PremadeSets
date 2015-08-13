<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-29 11:32:06 --- CRITICAL: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\views\admin\area\npcs.php [ 38 ] in file:line
2015-05-29 11:32:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'C:\\wamp\\www\\pok...', 38, Array)
#1 C:\wamp\www\pokebox\application\views\admin\area\npcs.php(38): implode(',', NULL)
#2 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#3 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#4 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#5 C:\wamp\www\pokebox\application\views\admin\area\edit.php(35): Kohana_View->__toString()
#6 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#7 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#8 C:\wamp\www\pokebox\system\classes\kohana\View.php(236): Kohana_View->render()
#9 C:\wamp\www\pokebox\application\views\template.php(11): Kohana_View->__toString()
#10 C:\wamp\www\pokebox\system\classes\kohana\View.php(62): include('C:\\wamp\\www\\pok...')
#11 C:\wamp\www\pokebox\system\classes\kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\pok...', Array)
#12 C:\wamp\www\pokebox\system\classes\kohana\controller\Template.php(44): Kohana_View->render()
#13 C:\wamp\www\pokebox\system\classes\kohana\Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 C:\wamp\www\pokebox\system\classes\kohana\request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_World))
#16 C:\wamp\www\pokebox\system\classes\kohana\request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 C:\wamp\www\pokebox\system\classes\kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\pokebox\index.php(118): Kohana_Request->execute()
#19 {main} in file:line